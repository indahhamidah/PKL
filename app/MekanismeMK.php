<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MekanismeMK extends Model
{
    protected $table = 'mekanisme_susun_mk';
    protected $primaryKey = 'id_mekanisme';
    protected $fillable = [
    	'id_departemen', 'mekanisme', 'created_at', 'updated_at'
    ];

}
