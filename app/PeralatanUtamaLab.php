<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeralatanUtamaLab extends Model
{
    protected $table = 'alat_utama_lab_ps';
     protected $primaryKey = 'id_alat_utama_lab';
    protected $fillable = [
    	'id_departemen','nama_lab', 'jenis_alat_utama', 'jumlah_unit_alat', 'id_kepemilikan_alat', 'id_kondisi_alat', 'rata_waktu', 'created_at', 'updated_at'
    ];
}
