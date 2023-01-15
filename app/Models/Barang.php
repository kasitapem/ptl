<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    #-- atribute yang boleh disiikan 
    protected $fillable = [
        'kode',
        'nmbarang',
        'jenisbarang',
        'lokasibarang',
        'thnpengadaan',
        'banyak',
        'harga'
    ];
      

    
}
