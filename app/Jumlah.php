<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class Jumlah extends Model{

     protected $table = 'jumlahs';
     protected $primaryKey = 'id_jumlah';
     protected $fillable = [
       'mbt_reguler', 'mt_reguler', 'total_reguler', 'mbt_nonreguler', 'mt_nonreguler', 'total_nonreguler', 'tahun'
         ];
}
