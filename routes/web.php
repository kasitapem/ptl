<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
# Panggil file BarangController 
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StatuskawinController;
#------ Controller UNtuk CRUD Mahasiswa ----------
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
#-- Controller Admin
use App\Http\Controllers\AdminRumpunIlmuController;
#------ end of Controller UNtuk CRUD Mahasiswa ----------
#-- Panggi URI jawabanuts
Route::get('/jawabanuts',[BarangController::class,'tampil'])->name('barang.tampil');

# -- Proses Login ==========================
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
# -- end proses login==========================


// Pembahasan Pertemuan-04
// Khusus URI untuk Halaman Beranda
//======================================
// Link-1
Route::get('/',[HomeController::class,'index'])->name('home.index');
// Link-2
Route::get('/about', function(){
    return view('about.about'); 
});
//link-3 Smabutan Rektor
Route::get('/sambutan_rektor', function(){
    return view('beranda.sambutrektor'); 
});
// link-4 selayang_pandang
Route::get('/selayang_pandang', function(){
    return view('beranda.selayang'); 
});

// link-5 pendaftaran
Route::get('/pendaftaran', function(){
    return view('beranda.pendaftaran'); 
});

// link-6 akreditasi
Route::get('/akreditasi', function(){
    return view('beranda.akreditasi'); 
});



// link-7 Research
Route::get('/research', function(){
    return view('beranda.research'); 
});


// link-8 Pusat STudi
Route::get('/pusat_studi', function(){
    return view('beranda.pusatstudi'); 
});

// link-9 Kerjasama
Route::get('/kerjasama', function(){
    return view('beranda.kerjasama'); 
});

// link-10 karir
Route::get('/karir', function(){
    return view('beranda.karir'); 
});
// link-11 Asrama
Route::get('/asrama', function(){
    return view('beranda.asrama'); 
});
// link-12 kewirausahaan
Route::get('/kewirausahaan', function(){
    return view('beranda.wirausaha'); 
});

// link-13 berita
Route::get('/berita', function(){
    return view('beranda.berita'); 
});

// Route::get('/',['HomeController@home']);
# syarat : Profider COntroler : namespcae="App\Http\Controller\
#  -------- End of Link BEranda =-============

#-- Route Login 
Route::get('/login','LoginController@index')->name('login')->middleware('guest');
Route::post('/login','LoginController@authenticate');
Route::post('/logout','LoginController@logout');
// Route::group(['middleware' => ['auth']], function() {
//     Route::get('/logout', 'LoginController@perform')->name('logout.perform');
//  });
#-- Route Register 
#---- App\Http\RegisterController.php --> view Admin/register.blade.php
Route::get('/register','RegisterController@index')->middleware('guest');
Route::post('/register','RegisterController@store');
#-- End  -----------------
#-- dashboard/index.blade.php : tdk pakai controller
// Route::get('/dashboard',function(){
//     return view('dashboard.index');
// })->middleware('auth');
#-- dashboard pakai controller
Route::get('/dashboard','DashboardController@index')->middleware('auth');


#-- Begin Call URI Dashboard
// Route::get('/proses_login',[LoginController::class,'proses_login'])->name('login.proses_login');
#--1. Status Perkawinan
// Route::get('/statkawin',[DashboardController::class,'status_kawin'])->name('dashboard.status_kawin');
Route::get('/statkawin',[StatuskawinController::class,'index'])->name('statuskawin.index');
Route::get('/status-tambah',[StatuskawinController::class,'create'])->name('statuskawin.create');
Route::get('/status-store',[StatuskawinController::class,'store'])->name('statuskawin.store');
Route::get('/status-edit',[StatuskawinController::class,'edit'])->name('statuskawin.edit');

Route::get('/jenjangpendidikan',[DashboardController::class,'jenjang_pendidikan'])->name('dashboard.jenjang_pendidikan');

#---------------------------------------------------
#-- memanggil seluruh metode yang dibuat 
#-- menggunakan Controller  Resource
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('matakuliah', MatakuliahController::class);
#-- Yang boleh dikelola oleh Administrator ------
#-- selain admin (user biasa), hanya boleh memanggil metode show
// Route::resource('rumpunilmu', AdminRumpunIlmuController::class)->except('show');
#-- menggunakan midleware ciptaan sendiri
Route::resource('rumpunilmu', AdminRumpunIlmuController::class)->except('show')
->middleware('admin');
Route::resource('jenjangpendidikan', AdminJenjangPendidikanController::class)->except('show')
->middleware('admin');

# -- 1 baris perintah mewakili seluruh metode
#---------------------------------------------------





