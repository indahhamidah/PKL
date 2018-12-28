<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisJPSeminar extends Model
{
    protected $table = 'jenis_jurnal_prosiding_seminar';
     protected $primaryKey = 'id_j_p_seminar';
    protected $fillable = [
    	'jenis_jp_seminar'
    ];

    public function jpSeminar(){
    	return $this->hasMany('App\JurnalProsidingSeminar', 'id_jenis_jp', 'id_j_p_seminar');
    }
}
