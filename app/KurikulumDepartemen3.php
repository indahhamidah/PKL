<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KurikulumDepartemen3 extends Model
{
    protected $table = 'kurikulum_dep_3';
     protected $primaryKey = 'id_kurikulum_3';
    protected $fillable = [
    	'id_departemen', 'keterangan', 'created_at', 'updated_at'
    ];
}
  