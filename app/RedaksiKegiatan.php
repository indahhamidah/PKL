<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RedaksiKegiatan extends Model
{
    public $table = 'redaksi_kegiatan';
    protected $primaryKey = 'id_redaksiKeg';
    protected $fillable = [
        'id_redaksiKeg', 'id_departemen', 'redaksi_kegiatan', 'redaksinya'
    ];

      public $timestamps = false;
      
     
}
