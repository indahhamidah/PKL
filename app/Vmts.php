<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vmts extends Model
{
    public $table = 'vmts';
    protected $primaryKey = 'id_vmts';
    protected $fillable = [
        'id_vmts', 'id_departemen', 'vmts',
    ];

      public $timestamps = false;
      
     
}
