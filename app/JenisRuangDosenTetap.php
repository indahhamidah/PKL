<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisRuangDosenTetap extends Model
{
    protected $table = 'daftar_ruang_kerja';
     protected $primaryKey = 'id_ruang_kerja_dosen';
    protected $fillable = [
    	'ruang_kerja_dosen',
    ];
}
