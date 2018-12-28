<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RedaksiPenelitian extends Model
{
    public $table = 'redaksi_penelitian';
    protected $primaryKey = 'id_redaksi';
    protected $fillable = [
        'id_redaksi', 'id_departemen', 'redaksi_penelitian','jumlah_mahasiswa', 'total_mahasiswa', 'tahun'
    ];

      public $timestamps = false;
      
     
}
