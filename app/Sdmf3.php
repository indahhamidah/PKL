<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdmf3 extends Model
{
    public $table = "sdmf3";
    protected $primaryKey = 'id_sdmf3';
    protected $fillable = [
        'pustakawan_s3_sdmf3', 'pustakawan_s2_sdmf3', 'pustakawan_s1_sdmf3', 'pustakawan_d4_sdmf3', 'tahun_sdmf3', 'id_departemen', 'pustakawan_d3_sdmf3', 'pustakawan_d2_sdmf3', 'pustakawan_d1_sdmf3', 'pustakawan_sma_sdmf3', 'pustakawan_unit_sdmf3', 'lab_s3_sdmf3', 'lab_s2_sdmf3', 'lab_s1_sdmf3', 'lab_d4_sdmf3', 'lab_d3_sdmf3', 'lab_d2_sdmf3', 'lab_d1_sdmf3', 'lab_sma_sdmf3', 'lab_unit_sdmf3', 'admin_s3_sdmf3', 'admin_s2_sdmf3', 'admin_s1_sdmf3', 'admin_d4_sdmf3', 'admin_d3_sdmf3', 'admin_d2_sdmf3', 'admin_d1_sdmf3', 'admin_sma_sdmf3', 'admin_unit_sdmf3', 'ktu_s3_sdmf3', 'ktu_s2_sdmf3', 'ktu_s1_sdmf3', 'ktu_d4_sdmf3', 'ktu_d3_sdmf3', 'ktu_d2_sdmf3', 'ktu_d1_sdmf3', 'ktu_sma_sdmf3', 'ktu_unit_sdmf3'
    ];
}