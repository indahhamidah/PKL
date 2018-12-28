<?php  

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdm16 extends Model
{
    public $table = 'upaya_meningkatkan_kompetensi_tendik';
    protected $primaryKey = 'id_upaya_meningkatkan_kompetensi_tendik';
    protected $fillable = [
        'id_upaya_meningkatkan_kompetensi_tendik', 'id_departemen', 'upaya_meningkatkan_kompetensi_tendik',
    ];

      public $timestamps = false;
      
     
}
