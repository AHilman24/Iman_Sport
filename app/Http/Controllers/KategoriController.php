<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;


class KategoriController extends Controller
{
    
    public function create(Request $request)
    {
        $validasi = Kategori::create([
            'kategori' => $request->kategori,
            'slug' => $request->slug,
        ]);
        if ($validasi) {
            FacadesAlert::success('Berhasil','Data Berhasil Di Tambahkan')
            ->showConfirmButton('ok')
            ->toast()
            ->autoClose(3000);
            return redirect('/kategori');
        }
    }

    public function delete(Request $request){
        $merek = Kategori::find($request->id);
        $delete = Kategori::where('id',$request->id)->delete();
        if ($delete) {
            FacadesAlert::success('Berhasil','Data Berhasil Di Hapus')
            ->showConfirmButton('ok')
            ->toast()
            ->autoClose(3000);
            return redirect('/kategori');
        }
    }

    public function index()
    {
        $data['kategori'] = Kategori::all();
        return view('admin.kategori',$data);
    }

    public function edit(Request $request){
        $item['data'] = Kategori::find($request->id);
        return view('admin.update-kategori',$item);
    }

    public function update(Request $request){
        Kategori::find($request->id);
        $kategori = Kategori::where('id',$request->id)->update([
            'kategori' => $request->kategori,
            'slug' => $request->slug,
        ]);
        FacadesAlert::success('Berhasil','Data Berhasil Di Update')
        ->showConfirmButton('ok')
        ->toast()
        ->autoClose(3000);
        return redirect('/kategori');
    }
}
