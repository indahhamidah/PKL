<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penelitian extends Model
{
     protected $table = 'penelitians';
   
     public $fillable = [
       'id_penelitian', 'id_departemen', 'judul_penelitian', 'nama_peneliti', 'tahun_penelitian', 'jumlah_dana', 'sumber_dana', 'id_bukti', 'jenis_dana', 'jumlah_mahasiswa'
         ];
     protected $primaryKey = 'id_penelitian';


         public $timestamps = false;

          public function bukti_penelitian(){
    	return $this->belongsTo('App\Bukti', 'id_penelitian', 'id_penelitian');
    } 
}
