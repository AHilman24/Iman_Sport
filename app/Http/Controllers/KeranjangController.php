<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Http\Requests\StoreKeranjangRequest;
use App\Http\Requests\UpdateKeranjangRequest;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;


class KeranjangController extends Controller
{

    public function addchart(Produk $produk)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu');
        }

        Keranjang::create([
            'user_id' => auth()->user()->id,
            'produk_id' => $produk->id,
            'quantity' => 1
        ]);

        FacadesAlert::success('Berhasil','Berhasil Menambahkan Produk Ke Keranjang')
                ->showConfirmButton('ok')
                ->autoClose(false);
        return redirect()->back();
    }

    public function delete(Request $request){
        $delete = Keranjang::find($request->id);
        $keranjang = Keranjang::where('id',$request->id)->delete();
        if ($keranjang) {
            FacadesAlert::success('Berhasil','Data Berhasil Di Hapus')
                ->showConfirmButton('ok')
                ->autoClose(false);
            return redirect()->back();
        }else {
            FacadesAlert::error('Berhasil','Data Gagal Di Hapus')
                ->showConfirmButton('ok')
                ->autoClose(false);
            return redirect()->back();
            
        }
    }
}
