<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MahasiswaTerlibat extends Model
{
    protected $table = 'terlibat_penelitian';
   
    public $fillable = [
       'id_mahasiswaPenelitian', 'id_departemen', 'nama_dosen', 'topik_penelitian', 'jumlah_mahasiswa', 'tahun_terlibat_penelitian'
         ];
    protected $primaryKey = 'id_mahasiswaPenelitian';


    public $timestamps = false;
}
