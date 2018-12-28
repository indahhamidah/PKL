<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum4 extends Model
{
	public $table = "jumlah_sks_ps";
	protected $primaryKey = 'id_jumlah_sks_ps';
	protected $fillable = [
		'sks_wajib_universitas', 'sks_wajib_fakultas', 'keterangan_wajib_universitas', 'keterangan_wajib_fakultas', 'id_departemen', 'sks_wajib_mayor', 'keterangan_wajib_mayor', 'sks_minor', 'keterangan_minor'
	];
}