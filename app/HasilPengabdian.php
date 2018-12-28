<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilPengabdian extends Model
{
    protected $table = 'hasil_pengabdian';
   
     public $fillable = [
       'id_hasilPengabdian', 'id_departemen', 'judul_hasilPengabdian', 'nama_dosenPengabdian', 'dipublikasi_pada', 'tahun_publikasi', 'tingkat_hasilpengabdian'
         ];
     protected $primaryKey = 'id_hasilPengabdian';


         public $timestamps = false;
}