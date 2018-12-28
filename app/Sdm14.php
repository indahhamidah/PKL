<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdm14 extends Model
{
    public $table = "keikutsertaan_organisasi";
    protected $primaryKey = 'id_keikutsertaan_organisasi';
    protected $fillable = [
        'nama_sdm14', 'nama_organisasi', 'kurun_waktu', 'id_departemen'
    ];
}