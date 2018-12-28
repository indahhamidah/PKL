<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BobotTugas extends Model
{
    protected $table = 'bobot_tugas';
   
     public $fillable = [
       'id_bobot_tugas', 'bobottugas'
         ];
     protected $primaryKey = 'id_bobot_tugas';


         public $timestamps = false; 
}