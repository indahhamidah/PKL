<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrasaranaPS extends Model
{
    protected $table = 'prasarana_ps';
    protected $primaryKey = 'id_prasarana_ps';
    protected $fillable = [
    	'jenis_prasarana_ps', 'jumlah_unit_prasarana', 'total_luas','id_departemen', 'id_kepemilikan_pras', 'id_kondisi_pras', 'utilisasi','created_at', 'updated_at', 'panjang', 'lebar'
    ];
}
