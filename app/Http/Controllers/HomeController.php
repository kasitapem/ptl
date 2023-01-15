<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index(){
        return view('welcome');#--- file utama berandas
        #-- file home.blade.php kita jadikan 
        #-- template buleprint
    }
    public function pendidikan(){
        $nmuser ="Madya Agus";
        return view('pendidikan.pendidikan',['nmuser'=>$nmuser]);
    }
    
}
