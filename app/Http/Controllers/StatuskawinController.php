<?php

namespace App\Http\Controllers;
# -- import nama Model yang akan diolah 
# -- Statusperkawinan
use Illuminate\Http\Request;

class StatuskawinController extends Controller
{
    
    public function index()
    {
        // memanggil statuskawin/index.blade.php 
        return view('dashboard.statuskawin.index');
    }
  
    public function create()
    { 
        // memanggil form entry data statuskawian
        // statuskawin/create.blade.php
        return view('dashboard.statuskawin.create');
    }
    
    public function store(Request $request)
    {
        // jika diklik tombol simpan pada form tambah/create.blade.php
        // proses simpan dan validasi
        $request->validae([
            'statkawin'=>'rquired |min:10|max:20',
        ]);
        #
        Statuskawin::create($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //-- Menampilkan form edit data 
        return view('dashboard.statuskawin.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
