<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdm13 extends Model
{
    public $table = "capaian_prestasi";
    protected $primaryKey = 'id_capaian_prestasi';
    protected $fillable = [
        'nama_sdm13', 'prestasi_yang_dicapai', 'waktu_pencapaian', 'id_departemen'
    ];
}