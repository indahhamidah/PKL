<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DokumenLuar extends Model
{
    public $table = 'dokumen_luar';
    protected $primaryKey = 'id_dokumenL';
    protected $fillable = [
        'id_dokumenL', 'id_kerjasamaLuar', 'id_departemen', 'dokumenL'
    ];

      public $timestamps = false;
      
    public function penelitians(){
    	return $this->belongsTo('App\KerjasamaLuar', 'id_kerjasamaLuar', 'id_kerjasamaLuar');
    } 
}
