<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lulusan extends Model
{
    protected $table = 'lulusans';
     protected $primaryKey = 'id_lulusan';
    protected $fillable = [
        'nama', 'nim', 'tahun_masuk', 'tahun_lulus', 'total_bulan', 'total_tahun', 'ipk', 'id_departemen'
         ];

    public function scopeBetween($query, Carbon $from, Carbon $to)
    {
        $query->whereBetween('created_at', [$from, $to]);
    }
}
