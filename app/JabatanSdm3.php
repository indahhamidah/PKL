<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;

class JabatanSdm3 extends Model
{
    protected $table = 'jabatan_sdm3';
   
     public $fillable = [
       'id_jabatan_sdm3', 'jabatann_sdm3'
         ];
     protected $primaryKey = 'id_jabatan_sdm3';


         public $timestamps = false;
}