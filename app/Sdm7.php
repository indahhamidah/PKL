<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdm7 extends Model
{
    public $table = "aktivitas_mengajar_dosen_diluar_ps";
    protected $primaryKey = 'id_aktivitas_mengajar_dosen_diluar_ps';
    protected $fillable = [
        'nama_sdm7', 'keahlian_sdm7', 'kode_sdm7', 'nama_mk_sdm7', 'id_departemen', 'jlh_rencana_sdm7', 'jlh_laksana_sdm7'
    ];
}