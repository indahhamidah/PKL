<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RedaksiLulusan extends Model
{
    public $table = 'redaksi_lulusan';
    protected $primaryKey = 'id_redaksiLus';
    protected $fillable = [
        'id_redaksiLus', 'id_departemen', 'redaksi_lulusan'
    ];

      public $timestamps = false;
      
     
}
