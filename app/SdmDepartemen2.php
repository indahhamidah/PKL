<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SdmDepartemen2 extends Model
{
    protected $table = 'sdm_dep_2';
     protected $primaryKey = 'id_sdm_2';
    protected $fillable = [
    	'id_departemen', 'keterangan', 'created_at', 'updated_at'
    ];
}
  