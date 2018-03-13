<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jumlah extends Model
{
     protected $table = 'jumlahs';
     // protected $primaryKey = 'id_jumlah';
     protected $fillable = [
        'id_jumlah','id_tipee', 'id_jenis_mahasiswaa', 'jumlah_mahasiswa', 'tahun', 'id_departemen'
         ];
}
