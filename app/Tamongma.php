<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamongma extends Model
{
    public $table = 'tamongjama';
    protected $primaryKey = 'id_tamongjama';
    protected $fillable = [
        'id_tamongjama', 'id_departemen', 'tamongjama',
    ];

      public $timestamps = false;
      
     
}
