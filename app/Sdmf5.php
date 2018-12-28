<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdmf5 extends Model
{
    public $table = "sdmf5";
    protected $primaryKey = 'id_sdmf5';
    protected $fillable = [
        'pustakawan_s3_sdmf5', 'pustakawan_s2_sdmf5', 'pustakawan_s1_sdmf5', 'pustakawan_d4_sdmf5', 'tahun_sdmf5', 'id_departemen', 'pustakawan_d3_sdmf5', 'pustakawan_d2_sdmf5', 'pustakawan_d1_sdmf5', 'pustakawan_sma_sdmf5', 'pustakawan_unit_sdmf5', 'lab_s3_sdmf5', 'lab_s2_sdmf5', 'lab_s1_sdmf5', 'lab_d4_sdmf5', 'lab_d3_sdmf5', 'lab_d2_sdmf5', 'lab_d1_sdmf5', 'lab_sma_sdmf5', 'lab_unit_sdmf5', 'admin_s3_sdmf5', 'admin_s2_sdmf5', 'admin_s1_sdmf5', 'admin_d4_sdmf5', 'admin_d3_sdmf5', 'admin_d2_sdmf5', 'admin_d1_sdmf5', 'admin_sma_sdmf5', 'admin_unit_sdmf5', 'ktu_s3_sdmf5', 'ktu_s2_sdmf5', 'ktu_s1_sdmf5', 'ktu_d4_sdmf5', 'ktu_d3_sdmf5', 'ktu_d2_sdmf5', 'ktu_d1_sdmf5', 'ktu_sma_sdmf5', 'ktu_unit_sdmf5'
    ];
}