<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profiles_projects_descriptions extends Model
{
    protected $table = 'profiles_projects_descriptions';
    protected $fillable = ['id','created_at','updated_at','id_profiles','id_descriptions_objects','in_activerecord'];
 
public function projects_descriptions()
{
    return $this->hasOne('App\Models\Projects_descriptions', 'foreign_key');
}
 
public function profiles()
{
    return $this->hasOne('App\Models\Profiles', 'foreign_key');
}
 
}

