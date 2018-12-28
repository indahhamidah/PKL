<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenilaianPrasarana extends Model
{
    protected $table = 'penilaian_prasaranaa';
     protected $primaryKey = 'id_nilai_pras';
    protected $fillable = [
    	'id_departemen', 'penilaian_pras', 'created_at', 'updated_at'
    ];
}
