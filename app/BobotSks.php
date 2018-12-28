<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;

class BobotSks extends Model
{
    protected $table = 'bobot_sks';
   
     public $fillable = [
       'id_bobot_sks', 'jumlah_sks'
         ];
     protected $primaryKey = 'id_bobot_sks';


         public $timestamps = false;
}