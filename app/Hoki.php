<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hoki extends Model
{
    protected $table = 'perolehanhoki';
   
     public $fillable = [
       'id_perolehanHoki', 'perolehanHoki'
         ];
     protected $primaryKey = 'id_perolehanHoki';


         public $timestamps = false;
}