<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_profile_basics extends Model
{
    protected $table = 'user_profile_basics';
    protected $fillable = ['id','created_at','updated_at','id_users'];
 
public function users()
{
    return $this->hasOne('App\Models\Users', 'foreign_key');
}
 
}

