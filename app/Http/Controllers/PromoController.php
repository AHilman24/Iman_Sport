<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use App\Http\Requests\StorePromoRequest;
use App\Http\Requests\UpdatePromoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['promo'] = Promo::all();
        return view('admin.iklan',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $fileName = '';
        if ($request->file('foto')) {
            $extFile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time().".".$extFile;
            $request->file('foto')->storeAs('foto',$fileName);
        }

        $validasi = Promo::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => $fileName,
        ]);
        if ($validasi) {
            return redirect('/slider');
        }
    }

    public function edit(Request $request){
        $data['promo'] = Promo::find($request->id);
        return view('admin.update-iklan',$data);
    }

    public function update(Request $request){
        $promo = Promo::find($request->id);
        $fileName = '';
        if ($request->file('foto')) {
            if ($promo->foto) {
                Storage::delete('foto/'.$promo->foto);
            }
            $extFile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time().".".$extFile;
            $request->file('foto')->storeAs('foto',$fileName);
            Promo::where('id',$request->id)->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'foto' => $fileName
            ]);
        }
        else {
            Promo::where('id',$request->id)->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi
            ]);
        }
        return redirect('/slider');
    }

    public function delete(Request $request){
        $promo = Promo::find($request->id);
        $delete = Promo::where('id',$request->id)->delete();
        if ($delete) {
            if ($promo->foto) {
                Storage::delete('foto/'.$promo->foto);
            }
            return redirect('/slider');
        }
    }
}
