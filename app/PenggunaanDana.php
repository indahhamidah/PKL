<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PenggunaanDana extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = "penggunaan_dana";
    protected $primaryKey = 'id_penggunaan_dana';
    protected $fillable = [
        'id_departemen', 'tahun_penggunaan', 'penelitian', 'pendidikan', 'pengabdian', 'inves_pras', 'inves_sar', 'inves_sdm', 'lain_lain' , 'create_at', 'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function departemen(){
        return $this->belongsTo('App\Departemen', 'id_departemen', 'id_dept');
    }
}
