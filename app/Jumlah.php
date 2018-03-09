<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jumlah extends Model
{
     protected $table = 'jumlahs';
     protected $primaryKey = 'id_jumlah';
     protected $fillable = [
        'tipe', 'jenis_mahasiswa', 'jumlah_mahasiswa', 'tahun', 'id_departemen'
         ];
}
