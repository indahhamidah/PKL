<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_SI extends Model
{
    protected $table = 'kategori_sistem_informasi';
     protected $primaryKey = 'id_kategori';
    protected $fillable = [
    	'kategori','created_at', 'updated_at'
    ];
}
