<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProposalPengabdian extends Model
{
    public $table = 'proposal_pengabdian';
    protected $primaryKey = 'id_proposalPeng';
    protected $fillable = [
        'id_proposalPeng', 'id_pengabdian', 'id_departemen', 'proposal_pengabdian'
    ];

      public $timestamps = false;
      
    public function penelitians(){
    	return $this->belongsTo('App\Pengabdian', 'id_pengabdian', 'id_pengabdian');
    } 
}
