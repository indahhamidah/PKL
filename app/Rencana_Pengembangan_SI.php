<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rencana_Pengembangan_SI extends Model
{
    protected $table = 'rencana_pengembangan_si';
     protected $primaryKey = 'id_rencana';
    protected $fillable = [
    	'rencana', 'id_departemen','created_at', 'updated_at'
    ];
}
