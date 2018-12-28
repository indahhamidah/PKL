<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdm6 extends Model
{
    public $table = "aktivitas_mengajar_dosen_sesuai_ps";
    protected $primaryKey = 'id_aktivitas_mengajar_dosen_sesuai_ps';
    protected $fillable = [
        'nama_sdm6', 'keahlian_sdm6', 'kode_sdm6', 'nama_mk_sdm6', 'id_departemen', 'jlh_rencana_sdm6', 'jlh_laksana_sdm6'
    ];
}