<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    //
    public function index(){
        $judul="Register";
        // $active="register";
        return view('admin.register',compact('judul'));
    }
    public function store(Request $request){
        
        #return $request->all();#-- tampilkan langsung  ke browser
        #-- Proses logic validasi
        $datavalid=$request->validate([
            'name' => 'required|max:255', # atau = cara dibawah
            'nmuser' => ['required','min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users', #--unique pada tabels users
            'password' => 'required|min:5|max:255',
            'level' => 'required','max:1',

        ]);
        #-- karena password harus disimpan secara ter encrypt, maka
        // $datavalid['password']= bcrypt($datavalid['password']);
        # atau
        $datavalid['password']= Hash::make($datavalid['password']);
        #-- validasi sukses, jalankan perintah berikut:
        # dd("Sukses");# tampilkan di browser
        # Jika sudah benar2 valid, maka simpan ke database
        User::create($datavalid);
        # jika simpan berhasil, 
        # tampilkan pesan di form login cara 1
        #$request->session->flash('pesan','Registrasi berhasil..!, silahkan Login');
        # maka kembali kehalaman login, cara lain menampilkan pesan sukses
        return redirect ('/login')->with('sukses','Registrasi berhasil..!, silahkan Login');


    }
}
