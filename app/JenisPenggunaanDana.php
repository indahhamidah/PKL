<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPenggunaanDana extends Model
{
    protected $table = 'jenis_penggunaan_dana';
     protected $primaryKey = 'id_jenis_penggunaan_dana';
    protected $fillable = [
    	'jenis_penggunaan_dana'
    ];
}
