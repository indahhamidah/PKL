<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Netware extends Model
{
    protected $table = 'netware';
     protected $primaryKey = 'id_netware';
    protected $fillable = [
    	'gambar_net', 'id_departemen','created_at', 'updated_at'
    ];
}
