<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum6 extends Model
{
    public $table = "mata_kuliah_pilihan";
    protected $primaryKey = 'id_mata_kuliah_pilihan';
    protected $fillable = [
        'nama_mk_kurikulum6', 'kode_mk_kurikulum6', 'id_departemen', 'pengelola'
    ];
}