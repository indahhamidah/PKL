<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;

class NamaDosen extends Model
{
    protected $table = 'nama_dosen';
   
     public $fillable = [
       'id_nama_dosen', 'namadosen'
         ];
     protected $primaryKey = 'id_nama_dosen';


         public $timestamps = false;
}