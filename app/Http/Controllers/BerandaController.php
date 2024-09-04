<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Merek;
use App\Models\User;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function merek(){
        $data['merek'] = Merek::all();
        $data['hitung'] = $data['merek']->count();
        return view('admin.dashboard',$data);
    }
}
