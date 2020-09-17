<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $table = 'departments';
    protected $fillable = ['id','created_at','updated_at','id_managements','id_projects','nb_department','nb_acronym','in_activerecord'];
 
public function managements()
{
    return $this->hasOne('App\Models\Managements', 'foreign_key');
}
 
public function projects()
{
    return $this->hasOne('App\Models\Projects', 'foreign_key');
}
 
public function profiles_departments()
{
    return $this->belongsTo('App\Models\Profiles_departments', 'foreign_key');
}
 
}

