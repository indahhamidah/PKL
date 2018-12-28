<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Penerimaan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'penerimaans';
    protected $fillable = [
        'tipe', 'jenis_mahasiswa', 'jumlah_mahasiswa', 'tahun'
    ];
}