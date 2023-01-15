@extends('layouts.dashboard')
@section('container')
  
<main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h2 class="h2">Dashboard / Tambah Data Mahasiswa</h2>
      
    </div>

<div class="container mt-2 mb-5">
    <div class="row">
    <div class="col-md-8">
    <div class="card border-0 shadow rounded">
    <div class="card-body">
    <form action="{{ route('mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
    <label class="font-weight-bold">FOTO</label>
    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
    @error('image')
    <div class="alert alert-danger mt-2">
    {{ $message }}
    </div>
    @enderror
    </div>
    
    <div class="form-group">
    <label class="font-weight-bold">NOBP</label>
    <input type="text" class="form-control @error('nobp') is-invalid @enderror" 
    name="nobp" value="{{ old('nobp') }}" placeholder="Isikan NOBP">
    
    <!-- error message untuk title -->
    @error('nobp')
    <div class="alert alert-danger mt-2">
    {{ $message }}
    </div>
    @enderror
    </div>
    
    <div class="form-group">
    <label class="font-weight-bold">NAMA MAHASISWA</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
    name="nama" value="{{ old('nama') }}" placeholder="Isikan Nama Mahasiswa">
    <!-- error message untuk content -->
    @error('nama')
    <div class="alert alert-danger mt-2">
    {{ $message }}
    </div>
    @enderror
    </div>

    <div class="form-group">
        <label class="font-weight-bold">JENIS KELAMIN</label>
        <select class="form-select" name="jk">
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>
        
    
        <div class="form-group">
            <label class="font-weight-bold">NOHP</label>
            <input type="text" class="form-control @error('nohp') is-invalid @enderror" 
            name="nohp" value="{{ old('nohp') }}" placeholder="Isikan Nomor HP">
            <!-- error message untuk content -->
            @error('nohp')
            <div class="alert alert-danger mt-2">
            {{ $message }}
            </div>
            @enderror
            </div>

            <div class="form-group">
                <label class="font-weight-bold">ALAMAT</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" 
                name="alamat" value="{{ old('alamat') }}" placeholder="Isikan Alamat Mahasiswa">
                <!-- error message untuk content -->
                @error('alamat')
                <div class="alert alert-danger mt-2">
                {{ $message }}
                </div>
                @enderror
                </div>
    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
    <button type="reset" class="btn btn-md btn-warning">RESET</button>
    </form> 
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
    CKEDITOR.replace( 'content' );
    </script>
    </div>
@endsection