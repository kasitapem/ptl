@extends('layouts.dashboard')
@section('container')
<div class="container mt-5 mb-5">
    <div class="row">
    <div class="col-md-8">
    <div class="card border-0 shadow rounded">
    <div class="card-body">
        <p><h1>Edit Data rumpunilmu</h1></p>
    <form action="{{ route('rumpunilmu.update',$rumpunilmu->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
    <label class="font-weight-bold">KODE RUMPUN</label>
    <input type="text" class="form-control @error('kdrumpun') is-invalid @enderror" 
    name="kdrumpun" value="{{ old('kdrumpun', $rumpunilmu->kdrumpun) }}" placeholder="Isikan Kode Rumpun ">
    <!-- error message untuk title -->
    @error('nobp')
    <div class="alert alert-danger mt-2">
    {{ $message }}
    </div>
    @enderror
    </div>
    <div class="form-group">
    <label class="font-weight-bold">NAMA RUMPUN ILMU</label>
    <input type="text" class="form-control @error('nmrumpun') is-invalid @enderror" 
    name="nmrumpun" value="{{ old('nmrumpun', $rumpunilmu->nmrumpun) }}" placeholder="Isikan Nama Rumpun Ilmu">
    <!-- error message untuk content -->
    @error('nmrumpun')
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