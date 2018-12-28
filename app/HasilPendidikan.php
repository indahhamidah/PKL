<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilPendidikan extends Model
{
    protected $table = 'hasil_pendidikan';
   
     public $fillable = [
       'id_hasilPendidikan', 'id_departemen', 'jenis_hasil', 'judul_hasilPendidikan', 'nama_dosen', 'id_haki', 'tahun_hasil'
         ];
     protected $primaryKey = 'id_hasilPendidikan';


         public $timestamps = false;
}
