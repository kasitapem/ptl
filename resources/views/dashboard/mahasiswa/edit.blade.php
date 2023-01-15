@extends('layouts.dashboard')
@section('container')
<div class="container mt-5 mb-5">
    <div class="row">
    <div class="col-md-8">
    <div class="card border-0 shadow rounded">
    <div class="card-body">
        <p><h1>Edit Data Mahasiswa</h1></p>
    <form action="{{ route('mahasiswa.update',$mahasiswa->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    {{-- menampilkan gambar --}}
    <figure class="figure-img">
        <img src="{{ Storage::url('public/mahasiswas/').$mahasiswa->image }}" class="rounded" style="width: 80px">
    </figure>
    {{--end of menampilkan gambar --}}

    <p>Upload Foto.
    <br> <em>Gambar harus berukuran 140px x 140px</em></p>
    <div class="form-group">
    <label class="font-weight-bold">FOTO</label>
    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
    <!-- error message untuk title -->
    @error('image')
    <div class="alert alert-danger mt-2">
    {{ $message }}
    </div>
    @enderror
    </div>
    
    
    <div class="form-group">
    <label class="font-weight-bold">NOBP</label>
    <input type="text" class="form-control @error('nobp') is-invalid @enderror" 
    name="nobp" value="{{ old('nobp', $mahasiswa->nobp) }}" placeholder="Isikan NOBP">
    
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
    name="nama" value="{{ old('nama', $mahasiswa->nama) }}" placeholder="Isikan Nama Mahasiswa">
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
            {{-- @foreach ($collection as $item) --}}
            @if (old('jk',$mahasiswa->jk == 'L' ))
            <option value="{{ $mahasiswa->jk }}" selected>Laki-Laki</option>
            <option value="P">Perempuan</option>
            @else
            <option value="{{ $mahasiswa->jk }}" selected>Perempuan</option>
            <option value="L">Laki-Laki</option>
            @endif
            {{-- @endforeach --}}
        </select>

{{-- 
        <input type="text" class="form-control @error('jk') is-invalid @enderror" 
        name="jk" value="{{ old('jk', $mahasiswa->jk) }}" placeholder="Isikan Jenis Kelamin [L/P]">
        <!-- error message untuk content -->
        @error('jk')
        <div class="alert alert-danger mt-2">
        {{ $message }}
        </div>
        @enderror --}}
        </div>
        <div class="form-group">
            <label class="font-weight-bold">NOHP</label>
            <input type="text" class="form-control @error('nohp') is-invalid @enderror" 
            name="nohp" value="{{ old('nohp', $mahasiswa->nohp) }}" placeholder="Isikan Nomor HP">
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
                name="alamat" value="{{ old('alamat', $mahasiswa->alamat) }}" placeholder="Isikan Alamat Mahasiswa" >
                <!-- error message untuk content -->
                @error('alamat')
                <div class="alert alert-danger mt-2">
                {{ $message }}
                </div>
                @enderror
                </div>
    <button type="submit" class="btn btn-md btn-primary  mt-2">UPDATE</button>
    <button type="reset" class="btn btn-md btn-warning mt-2">RESET</button>
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
    
@endsection