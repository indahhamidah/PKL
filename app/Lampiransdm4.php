<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lampiransdm4 extends Model
{
    public $table = 'lampiran_sdm4';
    protected $primaryKey = 'id_lampiran_sdm4';
    protected $fillable = [
        'id_lampiran_sdm4', 'id_data_dosen_yang_bidangnya_diluar_ps', 'id_departemen', 'lampiransdm4'
    ];

      public $timestamps = false;
      
    public function sdm4s(){
    	return $this->belongsTo('App\Sdm4', 'id_data_dosen_yang_bidangnya_diluar_ps', 'id_data_dosen_yang_bidangnya_diluar_ps');
    } 
}
 