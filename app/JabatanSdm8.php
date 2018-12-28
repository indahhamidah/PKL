<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;

class JabatanSdm8 extends Model
{
    protected $table = 'jabatan_sdm8';
   
     public $fillable = [
       'id_jabatan_sdm8', 'jabatann_sdm8'
         ];
     protected $primaryKey = 'id_jabatan_sdm8';


         public $timestamps = false;
}