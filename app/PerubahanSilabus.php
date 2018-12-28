<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerubahanSilabus extends Model
{
    protected $table = 'perubahan_pada_silabus';
   
     public $fillable = [
       'id_perubahan_silabus', 'perubahan_silabus'
         ];
     protected $primaryKey = 'id_perubahan_silabus';


         public $timestamps = false; 
}