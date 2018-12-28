<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $table = 'semester';
   
     public $fillable = [
       'id_semester', 'semesterr'
         ];
     protected $primaryKey = 'id_semester';


         public $timestamps = false;
}