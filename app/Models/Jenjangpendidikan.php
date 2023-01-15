<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenjangpendidikan extends Model
{
    use HasFactory;
    protected $table = "jenjangpendidikans"; 
    protected $primaryKey = 'id';
    #-- data yang boleh di isi Mass assignment
    protected $fillable =[
        'kdjjgpendik', 'nmjjgpendik'
    ];
    #--- tabel Jenjang Pendidikan memiliki relasi dengan model Dosen
    public function dosen(){
        #-- merujuk ke foreign key di Dosen : id_jjgpendik
        return $this->hasOne('App\Models\Dosen','id_jjgpendik');
    }
}
