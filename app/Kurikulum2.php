<?php  

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum2 extends Model
{
    public $table = 'kompetensi_pendukung_lulusan';
    protected $primaryKey = 'id_kompetensi_pendukung_lulusan';
    protected $fillable = [
        'id_kompetensi_pendukung_lulusan', 'id_departemen', 'kompetensi_pendukung_lulusan',
    ];

      public $timestamps = false;
      
     
}
