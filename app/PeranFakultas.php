<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeranFakultas extends Model
{
    protected $table = 'pembelajaran_fakultas';
     protected $primaryKey = 'id_pembelajaran';
    protected $fillable = [
    	'id_departemen', 'keterangan', 'created_at', 'updated_at'
    ];
}
