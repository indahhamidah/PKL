<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisDana extends Model
{
    protected $table = 'jenis_danaa';
     protected $primaryKey = 'id_jenis_danaa';
    protected $fillable = [
    	'jenis_dana'
    ];

    public function penerimaanDana(){
    	return $this->hasMany('App\PenerimaanDana', 'id_jenis_dana', 'id_jenis_danaa');
    }
}
