<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LampiranStandar2 extends Model
{
    protected $table = 'lampiran_standar2';
    protected $primaryKey = 'id_lampiranstan2';
    protected $fillable = [
    	'nama_lampiran2', 'lampiran_standar2','id_departemen', 'kode_lampiran','lemari_rak', 'created_at', 'updated_at'
    ];
}
