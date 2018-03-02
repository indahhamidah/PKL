<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jumlah extends Model
{
     protected $table = 'jumlahs';
    protected $fillable = [
        'tipe', 'jenis_mahasiswa', 'jumlah_mahasiswa', 'tahun'
         ];
}
