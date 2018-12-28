<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MahasiswaPengabdian extends Model
{
    protected $table = 'terlibat_pengabdian';
   
    public $fillable = [
       'id_mahasiswaPengabdian', 'id_departemen', 'judul_pengabdian', 'institusi', 'jumlah_mahasiswa_peng', 'tahun_pengabdian', 'keterlibatan_mahasiswa'
         ];
    protected $primaryKey = 'id_mahasiswaPengabdian';


    public $timestamps = false;
}
