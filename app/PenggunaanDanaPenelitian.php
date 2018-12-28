<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PenggunaanDanaPenelitian extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = "dana_utk_penelitian";
    protected $primaryKey = 'id_dana_penelitian';
    protected $fillable = [
        'id_departemen','tahun_dana_penelitian', 'judul_penelitian', 'nama_dosen_terlibat_', 'sumber_dana_', 'jenis_dana', 'jumlah_dana','created_at', 'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
