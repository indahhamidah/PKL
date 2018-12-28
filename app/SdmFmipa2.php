<?php 
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdmfmipa2 extends Model
{
    public $table = 'pandangan_fmipa_tentang_tendik';
    protected $primaryKey = 'id_pandangan_fmipa_tentang_tendik';
    protected $fillable = [
        'id_pandangan_fmipa_tentang_tendik', 'id_departemen', 'pandangan_fmipa_tentang_tendik',
    ];

      public $timestamps = false;
      
     
}
