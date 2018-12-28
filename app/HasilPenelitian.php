<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilPenelitian extends Model
{
    protected $table = 'hasil_penelitian';
   
     public $fillable = [
       'id_hasilPenelitian', 'id_departemen', 'judul_hasilPenelitian', 'nama_dosenPenelitian', 'dipublikasi_pada', 'tahun_publikasi', 'tingkat_hasilpenelitian'
         ];
     protected $primaryKey = 'id_hasilPenelitian';


         public $timestamps = false;
}
