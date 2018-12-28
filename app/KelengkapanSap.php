<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelengkapanSap extends Model
{
    protected $table = 'kelengkapan_sap';
   
     public $fillable = [
       'id_kelengkapan_sap', 'kelengkapansap'
         ];
     protected $primaryKey = 'id_kelengkapan_sap';


         public $timestamps = false; 
}