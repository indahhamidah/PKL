<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SdmDepartemen1 extends Model
{
    protected $table = 'sdm_dep_1';
     protected $primaryKey = 'id_sdm_1';
    protected $fillable = [
    	'id_departemen', 'keterangan', 'created_at', 'updated_at'
    ];
}
  