<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KerjasamaDalam extends Model
{
     protected $table = 'kerjasama_dalam';
   
     public $fillable = [
       'id_kerjasamaDalam', 'id_departemen', 'nama_instansi', 'jenis_kegiatan', 'tahun_nulai', 'tahun_akhir', 'manfaat', 'jumlah_dana'
         ];
     protected $primaryKey = 'id_kerjasamaDalam';


         public $timestamps = false; 
}