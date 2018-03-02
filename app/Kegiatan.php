<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    public $table = "kegiatan";
    protected $fillable = [
        'nama_kegiatan', 'tahun_kegiatan'
    ];
}