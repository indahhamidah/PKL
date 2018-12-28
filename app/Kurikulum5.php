<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum5 extends Model
{
    public $table = "struktur_kurikulum";
    protected $primaryKey = 'id_struktur_kurikulum';
    protected $fillable = [
        'nama_mk_kurikulum5', 'kode_mk_kurikulum5', 'id_departemen', 'penyelenggara','sks_inti','sks_institusional'
    ];
} 