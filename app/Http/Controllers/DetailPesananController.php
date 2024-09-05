<?php

namespace App\Http\Controllers;

use App\Models\Detail_Pesanan;
use App\Http\Requests\StoreDetail_PesananRequest;
use App\Http\Requests\UpdateDetail_PesananRequest;
use App\Models\Keranjang;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function detail(Request $request){
        $data['user'] = Auth::user();
        $data['produk'] = Produk::find($request->id);
        $data['barang'] = Produk::all();
        $data['pesanan'] = Pesanan::find($request->id);
        $data['keranjang'] = Keranjang::find($request->id);
        return view('admin.detail-pesanan',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDetail_PesananRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Detail_Pesanan $detail_Pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detail_Pesanan $detail_Pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDetail_PesananRequest $request, Detail_Pesanan $detail_Pesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detail_Pesanan $detail_Pesanan)
    {
        //
    }
}
