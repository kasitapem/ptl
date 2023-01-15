@extends('layouts.dashboard')
@section('container')
<main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>
    </div>
    <div class="container mt-3">
		<div class="row">
		<div class="col-md-12">
		<div class="card border-0 shadow rounded">
		<div class="card-body">
		<a href="{{ route('rumpunilmu.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA RUMPUN ILMU</a>
		<table class="table table-bordered">
		<thead>
		<tr>
		<th scope="col">#</th>
		<th scope="col">KODE RUMPUN</th>
		<th scope="col">NAMA RUMPUN ILMU</th>
		<th scope="col">AKSI</th>
		</tr>
		</thead>
		<tbody>
		@forelse ($rumpunilmus as $rumpunilmu)
		<tr>
            <td>{{ $loop->iteration }}</td>
		<td>{{ $rumpunilmu->kdrumpun }}</td>
		<td>{{  $rumpunilmu->nmrumpun }}</td>
		<td class="text-center">
		<form onsubmit="return confirm('Yakin data mau dihapus? ?');" action="{{ route('rumpunilmu.destroy', $rumpunilmu->id) }}" method="POST">
		<a href="{{ route('rumpunilmu.edit', $rumpunilmu->id) }}" class="btn btn-sm btn-primary">EDIT</a>
		@csrf
		@method('DELETE')
		<button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
		</form>
		</td>
		</tr>
		@empty
		<div class="alert alert-danger">
		Data Rumpun Ilmu belum Tersedia.
		</div>
		@endforelse
		</tbody>
		</table> 
		{{ $rumpunilmus->links() }}
		</div>
		</div>
		</div>
		</div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
		<script>
		//message with toastr
		@if(session()-> has('success'))
		toastr.success('{{ session('success') }}', 'BERHASIL!'); 
		@elseif(session()-> has('error'))
		toastr.error('{{ session('error') }}', 'GAGAL!'); 
		@endif
		</script>
  </main>
    @endsection