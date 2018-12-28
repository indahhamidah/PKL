<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KerjasamaLuar extends Model
{
     protected $table = 'kerjasama_luar';
   
     public $fillable = [
       'id_kerjasamaLuar', 'id_departemen', 'nama_instansi', 'jenis_kegiatan', 'tahun_nulai', 'tahun_akhir', 'jumlah_dana', 'manfaat'
         ];
     protected $primaryKey = 'id_kerjasamaLuar';


         public $timestamps = false; 
}