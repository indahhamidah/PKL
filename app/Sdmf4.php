<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdmf4 extends Model
{
    public $table = "sdmf4";
    protected $primaryKey = 'id_sdmf4';
    protected $fillable = [
        'isi_sdmf4', 'tahun_sdmf4', 'id_departemen'
    ];
}