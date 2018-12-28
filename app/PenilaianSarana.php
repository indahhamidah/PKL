<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenilaianSarana extends Model
{
    protected $table = 'penilaian_fmipa';
     protected $primaryKey = 'id_penilaian';
    protected $fillable = [
    	'id_departemen', 'penilaian', 'created_at', 'updated_at'
    ];
}
