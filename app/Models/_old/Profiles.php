<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    protected $table = 'profiles';
    protected $fillable = ['id','created_at','updated_at','nb_profile','tx_description','in_activerecord'];
 
public function users_profiles()
{
    return $this->belongsTo('App\Models\Users_profiles', 'foreign_key');
}
 
public function profiles_projects_descriptions()
{
    return $this->belongsTo('App\Models\Profiles_projects_descriptions', 'foreign_key');
}
 
public function profiles_departments()
{
    return $this->belongsTo('App\Models\Profiles_departments', 'foreign_key');
}
 
}

