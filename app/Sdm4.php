<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdm4 extends Model
{
     protected $table = 'data_dosen_yang_bidangnya_diluar_ps';
   
     public $fillable = [
       'id_data_dosen_yang_bidangnya_diluar_ps', 'id_departemen', 'gelar_sdm4', 'nama_dosen_sdm4', 'tanggal_lahir', 'nidn_sdm4', 'id_lampiran_sdm4', 'pendidikan_sdm4', 'bidang_keahlian', 'jabatan_nya'
         ];
     protected $primaryKey = 'id_data_dosen_yang_bidangnya_diluar_ps';


         public $timestamps = false;

          public function lampiran_sdm4(){
    	return $this->belongsTo('App\Lampiransdm4', 'id_data_dosen_yang_bidangnya_diluar_ps', 'id_data_dosen_yang_bidangnya_diluar_ps');
    } 
}
