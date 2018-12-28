<?php  

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum3 extends Model
{
    public $table = 'kompetensi_lainnya';
    protected $primaryKey = 'id_kompetensi_lainnya';
    protected $fillable = [
        'id_kompetensi_lainnya', 'id_departemen', 'kompetensi_lainnya',
    ];

      public $timestamps = false;
      
     
}
