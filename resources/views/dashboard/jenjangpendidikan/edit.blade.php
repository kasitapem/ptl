@extends('layouts.dashboard')
@section('container')
<div class="container mt-5 mb-5">
    <div class="row">
    <div class="col-md-8">
    <div class="card border-0 shadow rounded">
    <div class="card-body">
        <p><h1>Edit Data jenjangpendidikan</h1></p>
    <form action="{{ route('jenjangpendidikan.update',$jenjangpendidikan->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
    <label class="font-weight-bold">KODE</label>
    <input type="text" class="form-control @error('kdjjgpendik') is-invalid @enderror" 
    name="kdjjgpendik" value="{{ old('kdjjgpendik', $jenjangpendidikan->kdjjgpendik) }}" placeholder="Isikan Kode Jenjang Pendidikan ">
    <!-- error message untuk title -->
    @error('nobp')
    <div class="alert alert-danger mt-2">
    {{ $message }}
    </div>
    @enderror
    </div>
    <div class="form-group">
    <label class="font-weight-bold">NAMA JENJANG PENDIDIKAN</label>
    <input type="text" class="form-control @error('nmjjgpendik') is-invalid @enderror" 
    name="nmjjgpendik" value="{{ old('nmjjgpendik', $jenjangpendidikan->nmjjgpendik) }}" placeholder="Isikan Nama Jenjang Pendidikan">
    <!-- error message untuk content -->
    @error('nmjjgpendik')
    <div class="alert alert-danger mt-2">
    {{ $message }}
    </div>
    @enderror
    </div>
    <button type="submit" class="btn btn-md btn-primary  mt-2">UPDATE</button>
    <button type="reset" class="btn btn-md btn-warning mt-2">RESET</button>
    </form> 
    </div></div></div></div></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
    CKEDITOR.replace( 'content' );
    </script>
@endsection