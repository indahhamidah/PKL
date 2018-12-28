<?php  

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum8 extends Model
{
    public $table = 'mekanisme_peninjauan_kurikulum';
    protected $primaryKey = 'id_mekanisme_peninjauan_kurikulum';
    protected $fillable = [
        'id_mekanisme_peninjauan_kurikulum', 'id_departemen', 'mekanisme_peninjauan_kurikulum',
    ];

      public $timestamps = false;
      
     
}
