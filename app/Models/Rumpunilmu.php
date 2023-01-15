<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rumpunilmu extends Model
{
    use HasFactory;
    protected $table = "rumpunilmus"; 
    protected $primaryKey = 'id';
    #-- data yang boleh diisi
    protected $fillable =[
        'kdrumpun','nmrumpun'
    ];

    #--- tabel Rumpun Ilmu memiliki relasi dengan model Dosen
    public function dosen(){
        #-- merujuk ke foreign key Dosen : id_rimpun
        return $this->hasOne('App\Models\Dosen','id_rumpun');
    }
}
