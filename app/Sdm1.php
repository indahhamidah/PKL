<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdm1 extends Model
{
    public $table = 'sistem_seleksi_dan_pengembangan';
    protected $primaryKey = 'id_sistem_seleksi_dan_pengembangan';
    protected $fillable = [
        'id_sistem_seleksi_dan_pengembangan', 'id_departemen', 'sistem_seleksi_dan_pengembangan',
    ];

      public $timestamps = false;
      
     
}
