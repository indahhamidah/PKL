<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum7 extends Model
{
    public $table = "substansi_praktikum";
    protected $primaryKey = 'id_substansi_praktikum';
    protected $fillable = [
        'nama_praktikum_kurikulum7', 'judul_praktikum', 'jam_pelaksanaan', 'id_departemen', 'tempat_praktikum', 'kode_mk', 'jumlah_pertemuan_praktikum'
    ];
}