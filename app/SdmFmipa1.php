<?php  

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdmfmipa1 extends Model
{
    public $table = 'pandangan_fmipa_tentang_dosen_tetap';
    protected $primaryKey = 'id_pandangan_fmipa_tentang_dosen_tetap';
    protected $fillable = [
        'id_pandangan_fmipa_tentang_dosen_tetap', 'id_departemen', 'pandangan_fmipa_tentang_dosen_tetap',
    ];

      public $timestamps = false;
      
     
}
