<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    public $table = 'proposal';
    protected $primaryKey = 'id_proposal';
    protected $fillable = [
        'id_proposal', 'id_penelitian', 'id_departemen', 'proposal_penelitian'
    ];

      public $timestamps = false;
      
    public function penelitians(){
    	return $this->belongsTo('App\Penelitian', 'id_penelitian', 'id_penelitian');
    } 
}
