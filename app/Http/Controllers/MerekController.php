<?php

namespace App\Http\Controllers;

use App\Models\Merek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;


class MerekController extends Controller
{

    public function create(Request $request)
    {
        $fileName = '';
        if ($request->file('foto')) {
            $extFile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time().".".$extFile;
            $request->file('foto')->storeAs('foto',$fileName);
        }

        $validasi = Merek::create([
            'merek' => $request->merek,
            'slug' => $request->slug,
            'foto' => $fileName
        ]);

        if ($validasi) {
            FacadesAlert::success('Berhasil','Data Berhasil Di Tambahkan')
                ->showConfirmButton('ok')
                ->toast()
                ->autoClose(3000);
            return redirect('/merek');
        }
        else {
            return redirect('/merek')->with('gagal','gagal coy');
        }
    }

    public function index(Request $request)
    {
        $data['merek'] = Merek::all();
        $data['edit'] = Merek::find($request->id);
        //admin
        return view('admin.merek',$data);
    }
   

    public function delete(Request $request){
        $merek = Merek::find($request->id);
        $delete = Merek::where('id',$request->id)->delete();
        if ($delete) {
            if ($merek->foto) {
                Storage::delete('foto/'.$merek->foto);
            }
            FacadesAlert::success('Berhasil','Data Berhasil Di Hapus')
                ->showConfirmButton('ok')
                ->toast()
                ->autoClose(3000);
            return redirect('/merek');
        }
    }

    public function edit(Request $request){
        $data['merek'] = Merek::find($request->id);
        return view('admin.update-merek',$data);
    }

    public function update(Request $request){
        $merek = Merek::find($request->id);
        $fileName = '';
        if ($request->file('foto')) {
            if ($merek->foto) {
                Storage::delete('foto/'.$merek->foto);
            }
            $extFile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time().".".$extFile;
            $request->file('foto')->storeAs('foto',$fileName);
            Merek::where('id',$request->id)->update([
                'merek' => $request->merek,
                'slug' => $request->slug,
                'foto' => $fileName
            ]);
            FacadesAlert::success('Berhasil','Data Berhasil Di Ubah')
                ->showConfirmButton('ok')
                ->toast()
                ->autoClose(3000);
        }
        else {
            Merek::where('id',$request->id)->update([
                'merek' => $request->merek,
                'slug' => $request->slug
            ]);
            FacadesAlert::success('Berhasil','Data Berhasil Di Ubah')
                ->showConfirmButton('ok')
                ->toast()
                ->autoClose(3000);
        }
        return redirect('/merek');
    }
}
