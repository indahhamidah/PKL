<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KurikulumDepartemen1 extends Model
{
    protected $table = 'kurikulum_dep_1';
     protected $primaryKey = 'id_kurikulum_1';
    protected $fillable = [
    	'id_departemen', 'keterangan', 'created_at', 'updated_at'
    ];
}
  