<?php

namespace App\Http\Controllers;
use App\Models\Rumpunilmu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRumpunIlmuController extends Controller
{
    #-- Menampilkan data rumpun ilmu
    public function index()
    {
        # cara -1
        // if (auth()->guest()){
        //     abort(403);
        // }
         #-- cara-2 : harus dicopy ke seluruh method (tidak efektif juga)
        // if (!auth()->check() || auth()->user()->name !=="dilson" ){
        //     abort(403);
        // }
       # -- cara 3 : ciptakan midleware sendiri
       #-- untuk menempatkan logika di atas di midleware
       $user = Auth::user();#-- pastikan sudah memanggil Facades/Auth;
        $rumpunilmus = Rumpunilmu::latest()->paginate(5);
        #-- Komdisiskan disini
         #-- cara menggunakan Polciy utk hak akses
        //  if ($user->can('view', $article)) {
        //     echo "Current logged in user is allowed to update the Article: {$article->id}";
        //   } else {
        //     echo 'Not Authorized.';
        //   }

        return view('dashboard.rumpunilmu.index', compact('rumpunilmus'));
    }

    #-- panggil form entry data rumpun ilmu/create.blade.php
    public function create()
    {
        $user = Auth::user();
        //  #-- Kondisikan disni cara menggunakan Polciy utk hak akses
        //  if ($user->can('view', $article)) {
        //     echo "Current logged in user is allowed to update the Article: {$article->id}";
        //   } else {
        //     echo 'Not Authorized.';
        //   }
        // exit;

         return view('dashboard.rumpunilmu.create');
        

    }
    #-- Simpan data jika diklim tombol Simpan
    public function store(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'kdrumpun' =>  'required',
            'nmrumpun' =>  'required',
            ]);
            
            $rumpunilmu = Rumpunilmu::create([
            'kdrumpun' => $request->kdrumpun,
            'nmrumpun' => $request->nmrumpun,
            ]);
            
            if($rumpunilmu){
            //redirect dengan pesan sukses
            return redirect()->route('rumpunilmu.index')->with(['success' => 'Data Berhasil Disimpan!']);
            }else{
            //redirect dengan pesan error
            return redirect()->route('rumpunilmu.index')->with(['error' => 'Data Gagal Disimpan!']);
            } 
    }
    # -- menampilkan informasi detail
    public function show($id)
    {
        //
    }
   # -- Tampilkan form dashboard/rumpunilmu/edit.blade.php
    public function edit(Rumpunilmu $rumpunilmu)
    {
        $user = Auth::user();
        return view('dashboard.rumpunilmu.edit', compact('rumpunilmu'));
    }
    #-- Proses update data
    public function update(Request $request, Rumpunilmu $rumpunilmu)
    {
        $user = Auth::user();
        $this->validate($request, [
            'kdrumpun' =>  'required',
            'nmrumpun' =>  'required',
            ]);
            $rumpunilmu->update([
            'kdrumpun' => $request->kdrumpun,
            'nmrumpun' => $request->nmrumpun,
            ]);
            
            if($rumpunilmu){
            //redirect dengan pesan sukses
            return redirect()->route('rumpunilmu.index')->with(['success' => 'Perubahan Data Berhasil Disimpan!']);
            }else{
            //redirect dengan pesan error
            return redirect()->route('rumpunilmu.index')->with(['error' => 'Perubahan Data Gagal Disimpan!']);
            } 
    }

    # -- Hapus data rumpun ilmu    
    public function destroy($id)
    {
        $user = Auth::user();
        $rumpunilmu = Rumpunilmu::findOrFail($id);
        $rumpunilmu->delete();
        if($rumpunilmu){
        //redirect dengan pesan sukses
        return redirect()->route('rumpunilmu.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
        //redirect dengan pesan error
        return redirect()->route('rumpunilmu.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
        }
    }
