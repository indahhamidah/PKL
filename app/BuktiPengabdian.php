<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuktiPengabdian extends Model
{
    public $table = 'bukti_pengabdian';
    protected $primaryKey = 'id_buktiPeng';
    protected $fillable = [
        'id_buktiPeng', 'id_penngabdian', 'id_departemen', 'nama_buktiPengabdian', 'bukti_file'
    ];

      public $timestamps = false;
      
    public function penelitians(){
    	return $this->belongsTo('App\Pengabdian', 'id_penngabdian', 'id_penngabdian');
    } 
}
