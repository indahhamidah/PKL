<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;

class JabatanSdm4 extends Model
{
    protected $table = 'jabatan_sdm4';
   
     public $fillable = [
       'id_jabatan_sdm4', 'jabatann_sdm4'
         ];
     protected $primaryKey = 'id_jabatan_sdm4';


         public $timestamps = false;
}