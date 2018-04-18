<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $fillable = [
        'id_pengguna', 'id_departemen', 'role', 'name', 'username', 'email', 'password', 'remember_token','created_at','updated_at'
         ];
}
