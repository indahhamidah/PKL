<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Haki extends Model
{
    protected $table = 'perolehanhaki';
   
     public $fillable = [
       'id_perolehanHaki', 'perolehanHaki'
         ];
     protected $primaryKey = 'id_perolehanHaki';


         public $timestamps = false;
}