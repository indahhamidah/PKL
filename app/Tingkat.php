<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tingkat extends Model
{
    protected $table = 'tingkat_hasil';
   
     public $fillable = [
       'id_tingkatt', 'tingkat'
         ];
     protected $primaryKey = 'id_tingkatt';


         public $timestamps = false;
}