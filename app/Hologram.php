<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hologram extends Model
{
    protected $table = 'hologram_imovses';
     protected $primaryKey = 'id_hologram';
    protected $fillable = [
    	'gambar_hologram', 'id_departemen','created_at', 'updated_at'
    ];
}
