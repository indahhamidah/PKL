<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hiki extends Model
{
    protected $table = 'perolehanhiki';
   
     public $fillable = [
       'id_perolehanHiki', 'perolehanHiki'
         ];
     protected $primaryKey = 'id_perolehanHiki';


         public $timestamps = false;
}