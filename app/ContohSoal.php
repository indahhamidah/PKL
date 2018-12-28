<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContohSoal extends Model
{
    protected $table = 'contoh_soal_mk';
     protected $primaryKey = 'id_conso';
    protected $fillable = [
    	'id_departemen', 'kode_mk', 'nama_mk', 'conso', 'silabus', 'tahun','created_at', 'updated_at'
    ];
}
