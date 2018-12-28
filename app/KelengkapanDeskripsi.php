<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelengkapanDeskripsi extends Model
{
    protected $table = 'kelengkapan_deskripsi';
   
     public $fillable = [
       'id_kelengkapan_deskripsi', 'kelengkapandeskripsi'
         ];
     protected $primaryKey = 'id_kelengkapan_deskripsi';


         public $timestamps = false; 
}