<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SistemInformasi extends Model
{
    protected $table = 'software';
     protected $primaryKey = 'id_si';
    protected $fillable = [
    	'role_kategori', 'nama_sistem,', 'bentuk_si', 'fitur_si', 'tampilan_muka', 'pengembang','created_at', 'updated_at', 'url',
    ];
}
