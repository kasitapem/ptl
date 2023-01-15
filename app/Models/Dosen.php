<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $flillable=[
        'nidn','nmdosen','templhr','tgllhr','jk','alamat','email',
        'nohp','foto','id_status','id_rumpun','id_jjgpendik'
    ];
    // #-- Dosen memiliki huburngan relasi one-to-oen (belongsTo)
    // dengan tabel status perkawinan, jenjangpendidikan, dan rumpun ilmu
    // public function statusperkawinan(){
    //     return $this->belongsTo(statusperkawinan::class);
    // }
    public function statusperkawinan(){
        return $this->belongsTo('App/Models/Statusperkawinan','id_status');
    }
    public function rumpunilmu(){
        return $this->belongsTo('App/Models/Rumpunilmu','id_rumpun');
    }
    public function jenjangpendidikan(){
        return $this->belongsTo('App/Models/Jenjangpendidikan','id_jjgpendik');
    }
    
}
