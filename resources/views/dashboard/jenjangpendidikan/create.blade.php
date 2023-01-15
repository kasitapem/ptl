@extends('layouts.dashboard')
@section('container')
<main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h2 class="h2">Dashboard / Tambah Data Jenjang Pendidikan</h2>
    </div>
    <div class="container mt-2 mb-5">
    <div class="row">
    <div class="col-md-8">
    <div class="card border-0 shadow rounded">
    <div class="card-body">
    <form action="{{ route('jenjangpendidikan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- kdjjgpendik --}}
    <div class="form-group">
    <label class="font-weight-bold">KODE</label>
    <input type="text" class="form-control @error('kdjjgpendik') is-invalid @enderror" 
    name="kdjjgpendik" value="{{ old('kdjjgpendik') }}" placeholder="Isikan Kode Jenjang Pendidikan">
    <!-- error message untuk kode rumpun -->
    @error('kdjjgpendik')
    <div class="alert alert-danger mt-2">
    {{ $message }}
    </div>
    @enderror
    </div>
    {{-- nmjjgpendik --}}
    <div class="form-group">
    <label class="font-weight-bold">NAMA JENJANG PENDIDIKAN</label>
    <input type="text" class="form-control @error('nmjjgpendik') is-invalid @enderror" 
    name="nmjjgpendik" value="{{ old('nmjjgpendik') }}" placeholder="Isikan Nama Jenjang Pendidikan">
    <!-- error message untuk nama rumpun -->
    @error('nmjjgpendik')
    <div class="alert alert-danger mt-2">
    {{ $message }}
    </div>
    @enderror
    </div>
    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
    <button type="reset" class="btn btn-md btn-warning">RESET</button>
    </form> 
    </div></div></div></div></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
    CKEDITOR.replace( 'content' );
    </script>
    </div>
@endsection