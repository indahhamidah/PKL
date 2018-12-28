<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;

class Sdm11 extends Model
{
    public $table = "peningkatan_kemampuan";
    protected $primaryKey = 'id_peningkatan_kemampuan';
    protected $fillable = [
        'nama_sdm11', 'jenjang_pendidikan_lanjut', 'bidang_studi', 'perguruan_tinggi', 'id_departemen', 'negara', 'tahun_mulai_studi'
    ];
}