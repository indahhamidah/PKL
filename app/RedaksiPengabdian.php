<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RedaksiPengabdian extends Model
{
    public $table = 'redaksi_pengabdian';
    protected $primaryKey = 'id_redaksiPeng';
    protected $fillable = [
        'id_redaksiPeng', 'id_departemen', 'redaksi_pengabdian', 'partisipasi'
    ];

      public $timestamps = false;
      
     
}
