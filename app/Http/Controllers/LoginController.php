<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
#---- Proses Authentikasi 
#---- Menggunakan Midlleware dan sessio
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;

# ==================
class LoginController extends Controller
{
    // use AuthenticatesUsers;

    //metode 1 = index() : menampilkan form login
    public function index(){
        return view('admin.login', 
        ['judul' => 'Login'
    ]);
    }
    //metode 2 = proses() : menangkap data isian form login
    //1. proses autentikasi
    public function authenticate(Request $request){
        $credentials= $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        #-- jika benar 
        #dd('Sukses Login');
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            #-- utk menghindari serangan hacker melalui sesion
            # gubakan intene --> bukan redirect 
            
            return redirect()->intended('/dashboard');
        }
        # -- jika saslah 
        return back()->with('gagal','Data yang anda masukan salah..!');
        #-- sanpai tahap ini, kita berhasil masuk kedashbaord
        #-- tapi ketika keluar, session login masih tetap jalan.
        #-- seharusnya tidak
        #-- oleh sebab itu kita harus menggunakan midleware
        #-- midlewaree-> filter request data apakah user sudah terautentikasi/belum
        #-- midleware bisa dipasang didalam router middleware->('guest') middleware->('auth')
        #-- Kendalikan di Navigasi.blade.php
    }

    #--- Logout pakai Form
    public function logout(Request $request){
        Session::flush();
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login')->with('sukses','Anda sudah keluar dari aplikasi');
    }

}
