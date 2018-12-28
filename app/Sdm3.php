<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdm3 extends Model
{
     protected $table = 'data_dosen_yang_bidangnya_sesuai_ps';
   
     public $fillable = [
       'id_data_dosen_yang_bidangnya_sesuai_ps', 'id_departemen', 'gelar_sdm3', 'nama_dosen_sdm3', 'tanggal_lahir', 'nidn_sdm3', 'id_lampiran_sdm3', 'pendidikan_sdm3', 'bidang_keahlian' 
         ];
     protected $primaryKey = 'id_data_dosen_yang_bidangnya_sesuai_ps';


         public $timestamps = false;

          public function lampiran_sdm3(){
    	return $this->belongsTo('App\Lampiransdm3', 'id_data_dosen_yang_bidangnya_sesuai_ps', 'id_data_dosen_yang_bidangnya_sesuai_ps');
    } 
}
