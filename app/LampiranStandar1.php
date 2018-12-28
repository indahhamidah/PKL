<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LampiranStandar1 extends Model
{
    protected $table = 'lampiran_standar1';
     protected $primaryKey = 'id_lampiranstan1';
    protected $fillable = [
    	'nama_lampiran', 'lampiran_standar1','id_departemen','kode_lampiran','lemari_rak', 'created_at', 'updated_at'
    ];
}
