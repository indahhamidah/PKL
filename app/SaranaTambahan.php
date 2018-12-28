<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaranaTambahan extends Model
{
    protected $table = 'sarana_tambahan';
     protected $primaryKey = 'id_sarana_tambahan';
    protected $fillable = [
    	'id_departemen', 'jenis_sarana_tambahan', 'jumlah', 'satuan', 'harga_satuan', 'jmlh_harga', 'tahun_beli', 'tanggal_inves', 'investasi' , 'sumber_dana','created_at', 'updated_at'
    ];
}
