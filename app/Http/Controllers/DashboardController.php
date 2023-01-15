<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Masuk ke dashboard setelah login
    public function index(){
        return view('dashboard.index');
    }
    //--<Kumpulan Controller 
    // UNtuk Memanggil Views- dari URI/LInk
    //1. Status Perkawainan 
    public function status_kawin(){
        return view('dashboard.statuskawin.index');
    }
    //2. Jenjang Pendidikan 
    public function jenjang_pendidikan(){
        return view('dashboard.submenu.jenjangpendidikan');
    }
}
