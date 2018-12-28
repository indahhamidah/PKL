<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengelolaanDanaPS extends Model
{
    protected $table = 'pengelolaan_dana_ps';
     protected $primaryKey = 'id_kelola';
    protected $fillable = [
    	'id_departemen', 'penjelasan_kelola', 'created_at', 'updated_at'
    ];
}
