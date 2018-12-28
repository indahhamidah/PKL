<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenjelasanOrganoware extends Model
{
    protected $table = 'penjelasan_organoware';
     protected $primaryKey = 'id_penjelasan';
    protected $fillable = [
    	'penjelasan','id_departemen','created_at', 'updated_at'
    ];
}
