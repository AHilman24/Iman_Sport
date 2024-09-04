<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Merek;
use App\Models\Produk;
use App\Models\Promo;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data['merek'] = Merek::all();
        $data['slider'] = Promo::all();
        $data['produk'] = Produk::all();
        $data['keranjang'] = Keranjang::all();
        $data['total_keranjang'] = $data['keranjang']->count();
        return view('user.landing',$data);
    }

    public function detail(Request $request){
        $data['keranjang'] = Keranjang::all();
        $data['total_keranjang'] = $data['keranjang']->count();
        $data['produk'] = Produk::find($request->id);
        return view('user.detail-produk',$data);
    }

    public function search(Request $request){
        $data['produk'] = Produk::Where('id','LIKE','%'.$request->cari.'%')->OrWhere('nama_produk','LIKE','%'.$request->cari.'%')->get();
        $data['merek'] = Merek::all();
        $data['slider'] = Promo::all();
        $data['keranjang'] = Keranjang::all();
        $data['total_keranjang'] = $data['keranjang']->count();
        return view('user.landing',$data);
    }
}
