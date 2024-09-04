<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }
    public function auth(Request $request){
        $validasi = $request->validate([
            'email'=>['required','email'],
            'password'=>'required'
        ]);
        if (Auth::attempt($validasi)) {
            if (Auth::user()->admin_id == 1) {
                FacadesAlert::success('Berhasil','Data Berhasil Di Tambahkan')
                ->showConfirmButton('ok')
                ->autoClose(false);
                return redirect('/dashboard');
            }else {
                return redirect('/');
            }
        }
        return redirect()->back()->with('statusLogin','Maaf Login anda gagal');
    }
    
    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function register(){
        return view('register');
    }

    public function signup(Request $request){
        $level = 2;
        $signup = User::create([
            'name' => $request->name,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'admin_id' => $level
        ]);

        if ($signup) {
            return redirect('/login');
        }else{
            return redirect()->back();
        }
    }
}
