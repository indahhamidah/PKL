<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SumberPustakaLain extends Model
{
    protected $table = 'sumber_pustaka_lain';
     protected $primaryKey = 'id_sumber_pustaka_lain';
    protected $fillable = [
    	'nama_sumber_pustaka_lain', 'id_departemen','created_at', 'updated_at'
    ];
}
