<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Kategori;
use App\Models\Merek;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['merek'] = Merek::all();
        $data['hitung'] = $data['merek']->count();
        $data['user'] = User::all();
        $data['total'] = $data['user']->count();
        $data['kategori'] = Kategori::all();
        $data['itung'] = $data['kategori']->count();
        $data['produk'] = Produk::all();
        $data['tung'] = $data['produk']->count();
        $data['pesanan'] = Pesanan::all();
        $data['pesan'] = $data['pesanan']->count();
        return view('admin.dashboard',$data);
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
    public function store(StoreAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
