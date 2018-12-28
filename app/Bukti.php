<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bukti extends Model
{
    public $table = 'bukti_penelitian';
    protected $primaryKey = 'id_bukti';
    protected $fillable = [
        'id_bukti', 'id_penelitian', 'id_departemen', 'nama_buktiPenelitian', 'bukti'
    ];

      public $timestamps = false;
      
    public function penelitians(){
    	return $this->belongsTo('App\Penelitian', 'id_penelitian', 'id_penelitian');
    } 
}
