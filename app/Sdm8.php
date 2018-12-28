<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdm8 extends Model
{
     protected $table = 'data_dosen_tidak_tetap';
   
     public $fillable = [
       'id_data_dosen_tidak_tetap', 'id_departemen', 'gelar_sdm8', 'nama_dosen_sdm8', 'tanggal_lahir', 'nidn_sdm8', 'id_lampiran_sdm8', 'pendidikan_sdm8', 'bidang_keahlian'
         ];
     protected $primaryKey = 'id_data_dosen_tidak_tetap';


         public $timestamps = false;

          public function lampiran_sdm8(){
    	return $this->belongsTo('App\Lampiransdm8', 'id_data_dosen_tidak_tetap', 'id_data_dosen_tidak_tetap');
    } 
}
