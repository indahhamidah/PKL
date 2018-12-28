<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komersial extends Model
{
    protected $table = 'pl_komersial';
     protected $primaryKey = 'id_kerjasama_imovses';
    protected $fillable = [
    	'nama_imovses', 'id_departemen','created_at', 'updated_at'
    ];
}
