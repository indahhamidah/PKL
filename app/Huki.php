<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Huki extends Model
{
    protected $table = 'perolehanhuki';
   
     public $fillable = [
       'id_perolehanHuki', 'perolehanHuki'
         ];
     protected $primaryKey = 'id_perolehanHuki';


         public $timestamps = false;
}