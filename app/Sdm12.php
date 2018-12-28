<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdm12 extends Model
{
    public $table = "kegiatan_dosen";
    protected $primaryKey = 'id_kegiatan_dosen';
    protected $fillable = [
        'nama_sdm12', 'jenis_kegiatan', 'tempat_kegiatan', 'id_departemen', 'waktu_kegiatan'
    ];
}