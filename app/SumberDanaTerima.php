<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SumberDanaTerima extends Model
{
    protected $table = 'sumber_terima_dana';
     protected $primaryKey = 'id_sumber';
    protected $fillable = [
    	'sumber_terima_danaa', 
    ];

    public function penerimaanDana(){
    	return $this->hasMany('App\PenerimaanDana', 'id_sumber_danaa', 'id_sumber');
    }
}
