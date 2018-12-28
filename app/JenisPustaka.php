<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPustaka extends Model
{
    protected $table = 'jenis_pustaka_ruang_baca_dept';
     protected $primaryKey = 'id_jenis_pustaka_';
    protected $fillable = [
    	'jenis_pustaka'
    ];
}
