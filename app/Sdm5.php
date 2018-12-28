<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdm5 extends Model
{
    public $table = "aktivitas_dosen_sesuai_sks";
    protected $primaryKey = 'id_aktivitas_dosen_sesuai_sks';
    protected $fillable = [
        'nama_sdm5', 'sks_pengajaran_pada_ps_sendiri', 'sks_pengajaran_pada_ps_lain_pt_sendiri', 'sks_pengajaran_pada_pt_lain', 'id_departemen', 'sks_penelitian', 'sks_pengabdian_kepada_masyarakat', 'sks_manajemen_pt_sendiri', 'sks_manajemen_pt_lain', 'keterangan'
    ];
}