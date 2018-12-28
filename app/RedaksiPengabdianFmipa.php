<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RedaksiPengabdianFmipa extends Model
{
    public $table = 'redaksi_pengabdian_fmipa';
    protected $primaryKey = 'id_redaksiPeng';
    protected $fillable = [
        'id_redaksiPeng', 'id_departemen', 'redaksi_pengabdian_fmipa',
    ];

      public $timestamps = false;
}
