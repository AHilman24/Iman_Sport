<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use App\Models\Admin;
use App\Models\Kategori;
use App\Models\Merek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['produk'] = Produk::all();
        return view('admin.produk',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['merek'] = Merek::all();
        $data['data'] = Kategori::all();
        return view('admin.create-produk',$data);
    }

    public function add(Request $request){

        $fileName = '';
        if ($request->file('foto')) {
            $extFile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time().".".$extFile;
            $request->file('foto')->storeAs('foto',$fileName);
        }

        $validasi = Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'merek_id' => $request->merek_id,
            'kategori_id' => $request->kategori_id,
            'foto' => $fileName,
            'deskripsi' => $request->deskripsi
        ]);

        if ($validasi) {
            FacadesAlert::success('Berhasil','Data Berhasil Di Tambahkan')
                ->showConfirmButton('ok')
                ->autoClose(false);
            return redirect('/produk');
        }
    }

    public function edit(Request $request){
        $data['item'] = Produk::find($request->id);
        $data['merek'] = Merek::all();
        $data['data'] = Kategori::all();
        return view('admin.update-produk',$data);
    }

    public function update(Request $request){
        $update = Produk::find($request->id);
        $fileName = '';
        if ($request->file('foto')) {
            if ($update->foto) {
                Storage::delete('foto/'.$update->foto);
            }
            $extFile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time().".".$extFile;
            $request->file('foto')->storeAs('foto',$fileName);
            $validasi = Produk::where('id',$request->id)->update([
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'merek_id' => $request->merek_id,
                'kategori_id' => $request->kategori_id,
                'foto' => $fileName,
                'deskripsi' => $request->deskripsi
            ]);
        }
        else {
            $validasi = Produk::where('id',$request->id)->update([
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'merek_id' => $request->merek_id,
                'kategori_id' => $request->kategori_id,
                'deskripsi' => $request->deskripsi
            ]);
        }
        if ($validasi) {
            FacadesAlert::success('Berhasil','Data Berhasil Di Ubah')
                ->showConfirmButton('ok')
                ->autoClose(false);
            return redirect('/produk');
        }else {
            return redirect()->back();
        }
    }

    public function delete(Request $request){
        $produk = Produk::find($request->id);
        $delete = Produk::where('id',$request->id)->delete();
        if ($delete) {
            if ($produk->foto) {
                Storage::delete('foto/'.$produk->foto);
            }
            FacadesAlert::success('Berhasil','Data Berhasil Di Hapus')
                ->showConfirmButton('ok')
                ->autoClose(false);
            return redirect('/produk');
        }
    }
}
