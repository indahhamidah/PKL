<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RedaksiJumlah extends Model
{
    public $table = 'redaksi_jumlah';
    protected $primaryKey = 'id_redaksiJum';
    protected $fillable = [
        'id_redaksiJum', 'id_departemen', 'redaksi_jumlah'
    ];

      public $timestamps = false;
      
     
}