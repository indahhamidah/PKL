<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LampiranHasil extends Model
{
    public $table = 'lampiran_hasil';
    protected $primaryKey = 'id_lampiran';
    protected $fillable = [
        'id_lampiran', 'id_hasilPendidikan', 'id_departemen', 'lampiran'
    ];

      public $timestamps = false;
      
    public function penelitians(){
    	return $this->belongsTo('App\HasilPendidikan', 'id_hasilPendidikan', 'id_hasilPendidikan');
    } 
}
