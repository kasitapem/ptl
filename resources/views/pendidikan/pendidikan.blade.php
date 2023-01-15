<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>HALAMAN PENDIDIKAN </h1>
    <h2>Nama User : {{ $nmuser }}</h2>
    <A HREF="/pendaftaran">Pendaftaran </h1> | 
    <A HREF="/akreditasi">Akreditasi  </h1>
    <A HREF="/">Kembali </h1>
       
        {{-- <br>
        Program Studi S1: 
        @foreach ($prodi as $i)
        <h2>{{$i}}</h2>
        @endforeach
        Program Studi Pasca Sarcjana:
        @foreach ($pasca as $item)
        <h2>{{ $item }}</h2>
        @endforeach --}}
</body>
</html>