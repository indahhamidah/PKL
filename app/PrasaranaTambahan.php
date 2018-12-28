<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrasaranaTambahan extends Model
{
    protected $table = 'prasarana_tambahan';
     protected $primaryKey = 'id_prasarana_tambahan';
    protected $fillable = [
    	'jenis_prasarana_tambahan', 'tanggal_inves', 'investasi_prasarana','id_departemen', 'rencana_investasi', 'awal_rencana', 'akhir_rencana', 'sumber_dana','created_at', 'updated_at'
    ];
}
