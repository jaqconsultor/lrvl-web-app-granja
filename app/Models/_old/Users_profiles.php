<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users_profiles extends Model
{
    protected $table = 'users_profiles';
    protected $fillable = ['id','created_at','updated_at','id_users','id_profiles','fe_vencimiento','in_activerecord'];
 
public function profiles()
{
    return $this->hasOne('App\Models\Profiles', 'foreign_key');
}
 
public function users()
{
    return $this->hasOne('App\Models\Users', 'foreign_key');
}
 
}

