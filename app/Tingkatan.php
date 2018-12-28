<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;

class Tingkatan extends Model
{
    protected $table = 'tingkatan';
   
     public $fillable = [
       'id_tingkatan', 'tingkat'
         ];
     protected $primaryKey = 'id_tingkatan';


         public $timestamps = false;
}