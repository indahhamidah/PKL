<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpayaSebarInfo extends Model
{
    protected $table = 'upaya_sebar_informasi';
     protected $primaryKey = 'id_upaya';
    protected $fillable = [
    	'upaya_sebar', 'id_departemen','created_at', 'updated_at'
    ];
}
