<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum9 extends Model
{
    public $table = "hasil_peninjauan_kurikulum";
    protected $primaryKey = 'id_hasil_peninjauan_kurikulum';
    protected $fillable = [
        'nama_mk_kurikulum9', 'kode_mk_kurikulum9', 'status_mk', 'id_departemen', 'alasan_peninjauan', 'usulan', 'berlaku'
    ];
}