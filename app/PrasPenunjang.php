<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrasPenunjang extends Model
{
    protected $table = 'prasarana_penunjang_ps';
     protected $primaryKey = 'id_pras_penunjang';
    protected $fillable = [
    	'jenis_penunjang_ps', 'jumlah_unit', 'total_luas','id_departemen', 'id_kepemilikan_penunjang', 'id_kondisi_penunjang', 'unit_pengelola','created_at', 'updated_at'
    ];
}
