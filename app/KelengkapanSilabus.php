<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelengkapanSilabus extends Model
{
    protected $table = 'kelengkapan_silabus';
   
     public $fillable = [
       'id_kelengkapan_silabus', 'kelengkapansilabus'
         ];
     protected $primaryKey = 'id_kelengkapan_silabus';


         public $timestamps = false; 
}