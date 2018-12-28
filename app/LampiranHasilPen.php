<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LampiranHasilPen extends Model
{
    public $table = 'lampiran_hasilPen';
    protected $primaryKey = 'id_lampiranPen';
    protected $fillable = [
        'id_lampiranPen', 'id_hasilPenelitian', 'id_departemen', 'lampiranPen'
    ];

      public $timestamps = false;
      
    public function penelitians(){
    	return $this->belongsTo('App\HasilPenelitian', 'id_hasilPenelitian', 'id_hasilPenelitian');
    } 
}