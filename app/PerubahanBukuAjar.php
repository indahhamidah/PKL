<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerubahanBukuAjar extends Model
{
    protected $table = 'perubahan_pada_buku_ajar';
   
     public $fillable = [
       'id_perubahan_buku_ajar', 'perubahan_buku_ajar'
         ];
     protected $primaryKey = 'id_perubahan_buku_ajar';


         public $timestamps = false;
}