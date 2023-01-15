<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#-- panggil Model Barang
use App\Models\Barang;

class BarangController extends Controller
{
    // -- buat metode untuk menampilkan 
    // daftar inventaris barang 
    public function tampil(){
        $datanya = Barang::all(); # ORM
        #-- return ke view
        return view('utsnobp.uts', compact('datanya'));
    }
}
