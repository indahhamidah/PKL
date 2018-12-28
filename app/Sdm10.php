<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdm10 extends Model
{
    public $table = "kegiatan_tenaga_ahli";
    protected $primaryKey = 'id_kegiatan_tenaga_ahli';
    protected $fillable = [
        'nama_tenaga_ahli', 'nama_kegiatan', 'id_departemen', 'waktu_pelaksanaan'
    ];
}