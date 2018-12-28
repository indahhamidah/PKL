<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TerlibatPenelitian extends Model
{
    protected $table = 'mahasiswa_terlibat';
   
     public $fillable = [
       'id_terkibatpenelitian', 'terlibat_penelitian'
         ];
     protected $primaryKey = 'id_terkibatpenelitian';


         public $timestamps = false;
}
