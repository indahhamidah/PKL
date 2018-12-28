<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RedaksiPenelitianFmipa extends Model
{
    public $table = 'redaksi_penelitian_fmipa';
    protected $primaryKey = 'id_redaksiPen';
    protected $fillable = [
        'id_redaksiPen', 'id_departemen', 'redaksi_penelitian_fmipa',
    ];

      public $timestamps = false;
}
