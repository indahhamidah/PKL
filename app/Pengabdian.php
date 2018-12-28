<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengabdian extends Model
{
    protected $table = 'pengabdians';
   
     public $fillable = [
       'id_pengabdian', 'id_departemen', 'judul_pengabdian', 'institusi', 'tahun_pengabdian', 'jumlah_dana_peng', 'sumber_dana_peng', 'jenis_dana_peng', 'jumlah_mahasiswa_peng', 'keterlibatan_mahasiswa'
         ];
     protected $primaryKey = 'id_pengabdian';


         public $timestamps = false;
}
