<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendapatPimpinan extends Model
{
    protected $table = 'pendapat_pimpinan';
     protected $primaryKey = 'id_pendapat_pimp';
    protected $fillable = [
    	'keterangan', 'id_departemen','created_at', 'updated_at'
    ];
}
