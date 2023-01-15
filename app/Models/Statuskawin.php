<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statuskawin extends Model
{
    use HasFactory;
    protected $table = "statuskawin"; 
    protected $primaryKey = 'id';
    #-- data yang boleh disi
    protected $fillable=[
        'nmstatus'
    ];
    #--- tabel status kawin memiliki relasi dengan model Dosen
    public function dosen(){
        #-- merujuk ke foreign key Dosen : id_status
        return $this->hasOne('App\Models\Dosen','id_status');
    }
}
