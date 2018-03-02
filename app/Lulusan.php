<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lulusan extends Model
{
    protected $table = 'lulusans';
    protected $fillable = [
        'nama', 'nim', 'tahun_masuk', 'tahun_lulus', 'total_bulan', 'total_tahun', 'ipk'
         ];
}
