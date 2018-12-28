<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanaLainLain extends Model
{
    protected $table = 'lain_lain_dana';
     protected $primaryKey = 'id_lain';
    protected $fillable = [
    	'id_terima_danaa', 'nama_lain_lain', 'created_at', 'updated_at'
    ];

}
