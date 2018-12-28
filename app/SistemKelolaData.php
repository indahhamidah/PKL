<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SistemKelolaData extends Model
{
    protected $table = 'sistem_kelola_data';
     protected $primaryKey = 'id_sistem_kelola_datax';
    protected $fillable = [
    	'nama_sistem_kelola'
    ];
}
