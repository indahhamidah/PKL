<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    public $table = "departemen";
    protected $fillable = [
        'id_departemen','nama_departemen', 'id_user', 'id_mahasiswa', 'id_terima_dana', 'id_penggunaan_dana', 'id_kegiatan',
        'id_penelitian', 'id_pengabdian', 'id_prestasi', 'id_sarana_tambahan', 'id_hardware', 'id_si', 'id_kerjasama',
        'id_tenaga_kependidikan', 'id_penggantian_dosen', 'id_perencanaan_dosen','id_perencanaan_tkpd'
    ];

    public function penggunaanDana(){
    	return $this->hasMany('App\PenggunaanDana', 'id_departemen', 'id_dept');
    }
}