<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulumf extends Model
{
    public $table = "kurikulumf";
    protected $primaryKey = 'id_kurikulumf';
    protected $fillable = [
        'isi_kurikulumf', 'tahun_kurikulumf', 'id_departemen'
    ];
}