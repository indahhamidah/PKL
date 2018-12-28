<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DokumenDalam extends Model
{
    public $table = 'dokumen_dalam';
    protected $primaryKey = 'id_dokumenD';
    protected $fillable = [
        'id_dokumenD', 'id_kerjasamaDalam', 'id_departemen', 'dokumenD'
    ];

      public $timestamps = false;
      
    public function penelitians(){
    	return $this->belongsTo('App\KerjasamaDalam', 'id_kerjasamaDalam', 'id_kerjasamaDalam');
    } 
}
