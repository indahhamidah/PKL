<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KondisiPras extends Model
{
    protected $table = 'kondisi_prasarana_ps';
     protected $primaryKey = 'id_kondisi';
    protected $fillable = [
    	'kondisi'
    ];
}
