<?php 
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulumfmipa extends Model
{
    public $table = 'peran_fmipa_tentang_kurikulum';
    protected $primaryKey = 'id_peran_fmipa_tentang_kurikulum';
    protected $fillable = [
        'id_peran_fmipa_tentang_kurikulum', 'id_departemen', 'peran_fmipa_tentang_kurikulum',
    ];

      public $timestamps = false;
      
     
}
