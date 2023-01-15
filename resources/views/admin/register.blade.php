@extends('home')
@section('container')
<p></p>
<p><h1>Register</h1></p>
<div class="row justify-content-center">
    <div class="col-lg-5">
       {{-- menampilkan error validasi --}}
     @if (count($errors) > 0)
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
     @endif
     
    <form id='formdaftar' action='/register' method="post">
    <h1 class="h3 mb-3 fw-normal text-center">Formulir Pendaftaran</h1>
     
    @csrf
    <div class="form-floating">
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap" required value="{{ old('name') }}">
        <label for="name">Nama</label>
        @error('name')
        <div class="invalid-feedback">
          {{ $message }} 
        </div>
        @enderror
      </div>

      <div class="form-floating">
        <input type="text" name="nmuser" class="form-control @error('nmuser') is-invalid @enderror" id="nmuser" placeholder="Nama User" required value="{{ old('nmuser') }}">
        <label for="nmuser">Nama User</label>
        @error('nmuser')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
    <div class="form-floating">
      <input type="email" name="email"   onchange="ValidateEmail()" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
      <label for="email">Email address</label>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password"  class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
      <label for="password">Password</label>
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="hidden" name="level"   class="form-control @error('level') is-invalid @enderror" id="level" placeholder="name@example.com" required value="0">
      @error('level')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Daftar</button>
  </form>
  <small class="d-block text-center mt-3">sudah terdaftar? | silahkan
<a href="/login">Login</a>
  </small>
</div>
</div>

@endsection