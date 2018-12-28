<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;

class JabatanAkademik extends Model
{
    protected $table = 'jabatan_akademik';
   
     public $fillable = [
       'id_jabatan_akademik', 'jabatan'
         ];
     protected $primaryKey = 'id_jabatan_akademik';


         public $timestamps = false;
}