<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KurikulumDepartemen2 extends Model
{
    protected $table = 'kurikulum_dep_2';
     protected $primaryKey = 'id_kurikulum_2';
    protected $fillable = [
    	'id_departemen', 'keterangan', 'created_at', 'updated_at'
    ];
}
  