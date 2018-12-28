<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdm15 extends Model
{
    public $table = "sdm15";
    protected $primaryKey = 'id_sdm15';
    protected $fillable = [
        'pustakawan_s3_sdm15', 'pustakawan_s2_sdm15', 'pustakawan_s1_sdm15', 'pustakawan_d4_sdm15', 'tahun_sdm15', 'id_departemen', 'pustakawan_d3_sdm15', 'pustakawan_d2_sdm15', 'pustakawan_d1_sdm15', 'pustakawan_sma_sdm15', 'pustakawan_unit_sdm15', 'lab_s3_sdm15', 'lab_s2_sdm15', 'lab_s1_sdm15', 'lab_d4_sdm15', 'lab_d3_sdm15', 'lab_d2_sdm15', 'lab_d1_sdm15', 'lab_sma_sdm15', 'lab_unit_sdm15', 'admin_s3_sdm15', 'admin_s2_sdm15', 'admin_s1_sdm15', 'admin_d4_sdm15', 'admin_d3_sdm15', 'admin_d2_sdm15', 'admin_d1_sdm15', 'admin_sma_sdm15', 'admin_unit_sdm15', 'ktu_s3_sdm15', 'ktu_s2_sdm15', 'ktu_s1_sdm15', 'ktu_d4_sdm15', 'ktu_d3_sdm15', 'ktu_d2_sdm15', 'ktu_d1_sdm15', 'ktu_sma_sdm15', 'ktu_unit_sdm15', 'lab1_s3_sdm15', 'lab1_s2_sdm15', 'lab1_s1_sdm15', 'lab1_d4_sdm15', 'lab1_d3_sdm15', 'lab1_d2_sdm15', 'lab1_d1_sdm15', 'lab1_sma_sdm15', 'lab1_unit_sdm15', 'admin1_s3_sdm15', 'admin1_s2_sdm15', 'admin1_s1_sdm15', 'admin1_d4_sdm15', 'admin1_d3_sdm15', 'admin1_d2_sdm15', 'admin1_d1_sdm15', 'admin1_sma_sdm15', 'admin1_unit_sdm15', 'admin2_s3_sdm15', 'admin2_s2_sdm15', 'admin2_s1_sdm15', 'admin2_d4_sdm15', 'admin2_d3_sdm15', 'admin2_d2_sdm15', 'admin2_d1_sdm15', 'admin2_sma_sdm15', 'admin2_unit_sdm15'
    ];
}