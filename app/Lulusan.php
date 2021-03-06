<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lulusan extends Model
{
    protected $table = 'lulusans';
     protected $primaryKey = 'id_lulusan';
    protected $fillable = [
        'nama', 'nim', 'tahun_masuk', 'tahun_lulus', 'total_bulan', 'total_tahun', 'ipk', 'id_departemen','judul_skripsi','no_ijazah','pembimbing1','pembimbing2','created_at','updated_at'
         ];
}
