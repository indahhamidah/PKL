<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;

class JumlahKelas extends Model
{
    protected $table = 'jumlah_kelas';
   
     public $fillable = [
       'id_jumlah_kelas', 'jlh_kelas'
         ];
     protected $primaryKey = 'id_jumlah_kelas';


         public $timestamps = false;
}