<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SumberDana extends Model
{
    protected $table = 'sumber_dana';
   
     public $fillable = [
       'id_sumber', 'sumber_danaa'
         ];
     protected $primaryKey = 'id_sumber';


         public $timestamps = false;
}