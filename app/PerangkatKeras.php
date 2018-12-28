<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerangkatKeras extends Model
{
    protected $table = 'hardware';
     protected $primaryKey = 'id_hardware';
    protected $fillable = [
    	'id_departemen','nama_hardware', 'spesifikasi', 'jumlah_item', 'keterangan_hw', 'created_at', 'updated_at'
    ];
}
