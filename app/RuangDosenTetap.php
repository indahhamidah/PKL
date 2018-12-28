<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RuangDosenTetap extends Model
{
    protected $table = 'ruang_kerja_dosen_tetap';
     protected $primaryKey = 'id_rk_dosen_tetap';
    protected $fillable = [
    	'id_departemen', 'id_ruang_kerja', 'jumlah_ruang','jumlah_luas','created_at', 'updated_at'
    ];
}
