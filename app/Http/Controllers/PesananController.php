<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Http\Requests\StorePesananRequest;
use App\Http\Requests\UpdatePesananRequest;
use App\Models\Detail_Pesanan;
use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;


class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data['keranjang'] = Keranjang::all();
        $data['total_keranjang'] = $data['keranjang']->count();
        $data['cart'] = User::find($request->id);
        $data['produk'] = Produk::find($request->id);
        return view('user.checkout',$data);
    }

    public function check(Request $request){
        $data['keranjang'] = Keranjang::all();
        $data['chart'] = Keranjang::where('id',$request->id)->with('produk')->first();
        $data['cart'] = User::find($request->id);
        $data['total_keranjang'] = $data['keranjang']->count();
        // $data['produk'] = Produk::find($request->id);
        // dd($data['keranjang']);
        return view('user.check',$data);
    }

    public function checkoutProcess(Request $request)
    {
        $cart = json_decode($request->cart, true);
        $produk = json_decode($request->produk, true);
        // dd($cart, $produk);
        $pesanan = Pesanan::create([
            'user_id' => auth()->user()->id,
            'produk_id' => $produk['id'],
            'quantity' => 1,
            'total_bayar' => $produk['harga']
        ]);

        $pesananId = $pesanan->id;

        Detail_Pesanan::create([
            'pesanan_id' => $pesananId,
            'produk_id' => $produk['id'],
            'harga' => $produk['harga']
        ]);

        User::where('id',$request->id)->update([
            'alamat' => $request->alamat
        ]);

        if ($pesanan) {
            # code...
            FacadesAlert::success('Berhasil','Terima kasih Telah Belanja di Sini, Mohon di tunggu pesanan nya datang')
            ->showConfirmButton('ok')
            ->autoClose(false);
            return redirect('/');
        }
    }

    public function show(){ //admin
        $data['pesanan'] = Pesanan::all();
        return view('admin.pesanan',$data);
    }
}
