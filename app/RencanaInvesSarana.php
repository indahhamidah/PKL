<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RencanaInvesSarana extends Model
{
    protected $table = 'rencana_inves_sarana';
     protected $primaryKey = 'id_sarana_rencana';
    protected $fillable = [
    	'id_departemen', 'jenis_sarana_tamb', 'jumlah', 'satuan', 'harga_sat', 'jumlah_harga', 'tahun_ada',  'rencana_investasi', 'awal', 'akhir' , 'sumber_dana','created_at', 'updated_at'
    ];
}
