<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PenerimaanDana extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = "penerimaan_dana";
    protected $primaryKey = 'id_terima_dana';
    protected $fillable = [
        'id_departemen','id_sumber_danaa', 'jenis_dana', 'jumlah_dana_terima', 'tahun_terima_dana', 'created_at', 'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function sumberDana(){
        return $this->belongsTo('App\SumberDanaTerima', 'id_sumber_danaa', 'id_sumber');
    }
    public function jenisDana(){
        return $this->belongsTo('App\JenisDana', 'id_jenis_dana', 'id_jenis_danaa');
    }
}
