<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = ['id','created_at','updated_at','login','name','email','password','remember_token','in_verified','in_firstime','email_verified_at','in_activerecord'];
 
public function user_profile_photos()
{
    return $this->belongsTo('App\Models\User_profile_photos', 'foreign_key');
}
 
public function user_profile_basics()
{
    return $this->belongsTo('App\Models\User_profile_basics', 'foreign_key');
}
 
public function users_projects_descriptions()
{
    return $this->belongsTo('App\Models\Users_projects_descriptions', 'foreign_key');
}
 
public function users_profiles()
{
    return $this->belongsTo('App\Models\Users_profiles', 'foreign_key');
}
 
public function parameters_users()
{
    return $this->belongsTo('App\Models\Parameters_users', 'foreign_key');
}
 
}

