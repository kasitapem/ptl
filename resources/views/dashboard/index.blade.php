@extends('layouts.dashboard')
@section('container')
<main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Selamat Datang {{ auth()->user()->nmuser }}</h1>
      {{-- <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
          <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
          <span data-feather="calendar" class="align-text-bottom"></span>
          This week
        </button>
      </div> --}}
    </div>

    <canvas class="my-4 w-100" id="myChart" width="900" height="380">

        <h1>asdsadsad</h1>
    </canvas>

  </main>
@endsection