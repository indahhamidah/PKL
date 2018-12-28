<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PenggunaanDanaPengabdian extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = "dana_dr_utk_pengabdian_msrkt";
    protected $primaryKey = 'id_dana_pgbdn';
    protected $fillable = [
        'id_departemen','tahun_pgb_dana', 'judul_kegiatan', 'dosen_terlibat', 'sumber_dana', 'jenis_danaa', 'jumlah_dana','created_at', 'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
