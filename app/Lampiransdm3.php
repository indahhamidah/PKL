<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lampiransdm3 extends Model
{
    public $table = 'lampiran_sdm3';
    protected $primaryKey = 'id_lampiran_sdm3';
    protected $fillable = [
        'id_lampiran_sdm3', 'id_data_dosen_yang_bidangnya_sesuai_ps', 'id_departemen', 'lampiransdm3'
    ];

      public $timestamps = false;
      
    public function sdm3s(){
    	return $this->belongsTo('App\Sdm3', 'id_data_dosen_yang_bidangnya_sesuai_ps', 'id_data_dosen_yang_bidangnya_sesuai_ps');
    } 
}
 