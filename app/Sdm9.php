<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdm9 extends Model
{
    public $table = "aktivitas_mengajar_dosen_tidak_tetap";
    protected $primaryKey = 'id_aktivitas_mengajar_dosen_tidak_tetap';
    protected $fillable = [
        'nama_sdm9', 'keahlian_sdm9', 'kode_sdm9', 'nama_mk_sdm9', 'id_departemen', 'jlh_rencana_sdm9', 'jlh_laksana_sdm9'
    ];
}