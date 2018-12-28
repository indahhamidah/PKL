<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SdmDepartemen16 extends Model
{
    protected $table = 'sdm_dep_16';
     protected $primaryKey = 'id_sdm_16';
    protected $fillable = [
    	'id_departemen', 'keterangan', 'created_at', 'updated_at'
    ];
}
  