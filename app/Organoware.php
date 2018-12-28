<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organoware extends Model
{
    protected $table = 'organoware';
     protected $primaryKey = 'id_organoware';
    protected $fillable = [
    	'nama_organoware', 'dokumen', 'awal_renstra', 'akhir_renstra','id_departemen','created_at', 'updated_at'
    ];
}
