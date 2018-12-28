<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AksesibilitasData extends Model
{
    protected $table = 'aksesibilitas_data';
     protected $primaryKey = 'id_akses_data';
    protected $fillable = [
    	'id_departemen', 'id_jenis_akses_data', 'id_sistem_kelola','created_at', 'updated_at'
    ];
}
