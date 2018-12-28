<?php  

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum1 extends Model
{
    public $table = 'kompetensi_utama_lulusan';
    protected $primaryKey = 'id_kompetensi_utama_lulusan';
    protected $fillable = [
        'id_kompetensi_utama_lulusan', 'id_departemen', 'kompetensi_utama_lulusan',
    ];

      public $timestamps = false;
      
     
}
