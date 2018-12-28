<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lampiransdm8 extends Model
{
    public $table = 'lampiran_sdm8';
    protected $primaryKey = 'id_lampiran_sdm8';
    protected $fillable = [
        'id_lampiran_sdm8', 'data_dosen_tidak_tetap', 'id_departemen', 'lampiransdm8'
    ];

      public $timestamps = false;
      
    public function sdm8s(){
    	return $this->belongsTo('App\Sdm8', 'data_dosen_tidak_tetap', 'data_dosen_tidak_tetap');
    } 
}
 