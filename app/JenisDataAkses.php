<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisDataAkses extends Model
{
    protected $table = 'jenis_akses_data';
     protected $primaryKey = 'id_jenis_akses';
    protected $fillable = [
    	'jenis_data_akses'
    ];
}
