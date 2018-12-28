<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KurikulumDepartemen8 extends Model
{
    protected $table = 'kurikulum_dep_8';
     protected $primaryKey = 'id_kurikulum_8';
    protected $fillable = [
    	'id_departemen', 'keterangan', 'created_at', 'updated_at'
    ];
}
  