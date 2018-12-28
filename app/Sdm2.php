<?php  

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdm2 extends Model
{
    public $table = 'monitoring_dan_evaluasi';
    protected $primaryKey = 'id_monitoring_dan_evaluasi';
    protected $fillable = [
        'id_monitoring_dan_evaluasi', 'id_departemen', 'monitoring_dan_evaluasi',
    ];

      public $timestamps = false;
      
     
}
