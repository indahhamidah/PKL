<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisHasil extends Model
{
    protected $table = 'jenis_hasilPendidikan';
   
     public $fillable = [
       'id_jenisHasil', 'jenis_hasil'
         ];
     protected $primaryKey = 'id_jenisHasil';


         public $timestamps = false;
}