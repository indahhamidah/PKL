<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JurnalProsidingSeminar extends Model
{
    protected $table = 'jurnal_prosiding_seminar';
     protected $primaryKey = 'id_jp_seminar';
    protected $fillable = [
    	'nama_jurnal', 'id_departemen', 'id_jenis_jp', 'rinci_no', 'rinci_tahun', 'jumlah', 'created_at', 'updated_at', 'penerbit'
    ];

    public function jenisJP(){
    	return $this->belongsTo('App\JenisJPSeminar', 'id_jenis_jp', 'id_j_p_seminar');
    }
}
