<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KepemilikanPras extends Model
{
    protected $table = 'kepemilikan_prasarana_ps';
     protected $primaryKey = 'id_kepemilikan';
    protected $fillable = [
    	'kepemilikan'
    ];
}
