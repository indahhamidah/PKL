<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PustakaRuangBaca extends Model
{
    protected $table = 'pustaka_di_ruang_baca_dept';
     protected $primaryKey = 'id_pustaka_ruang_baca';
    protected $fillable = [
    	'id_jenis_pustaka', 'jumlah_judul', 'jumlah_copy','id_departemen','created_at', 'updated_at'
    ];
}
