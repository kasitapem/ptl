<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Laporan Daftar Inventaris Barang</h1>
    <h2>Tahun 2022</h2>
    <table>
    <tr>
    <td></td>
    <td>Kode </td>
    <td>Nama Barang</td>
    <td>Jenis Barang</td>
    <td>Lokasi Barang</td>
    <td>Tahun</td>
    <td>Banyak</td>
    <td>Harga</td>
    <td>Jumlah</td>
    <td colspan="2">Aksi</td>
    </tr>
    @foreach ($datanya as $item)
    <tr>
    <td>{{ $loop->iteration }} </td>
    <td>{{ $item->kode }}</td>
    <td>{{ $item->nmbarang }}</td>
    <td>{{ $item->jenisbarang }}</td>
    <td>{{ $item->lokasibarang }}</td>
    <td>{{ $item->thnpengadaan }}</td>
    <td>{{ $item->banyak}}</td>
    <td>{{ $item->harga }}</td>
    <td>{{ $item->banyak * $item->harga }}</td>
    <td><a href="#">Edit</a></td>
    <td><a href="#">hapus</a></td>
</tr>
    @endforeach
    </table>
</body>
</html>