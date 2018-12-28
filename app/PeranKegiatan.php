<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeranKegiatan extends Model
{
    protected $table = 'peran_kegiatan';
   
     public $fillable = [
       'id_peran_kegiatan', 'status_peran_kegiatan'
         ];
     protected $primaryKey = 'id_peran_kegiatan';


         public $timestamps = false; 
}