<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects_sections extends Model
{
    protected $table = 'projects_sections';
    protected $fillable = ['id','created_at','updated_at','id_projects','nb_sections','in_activerecord'];
 
public function projects()
{
    return $this->hasOne('App\Models\Projects', 'foreign_key');
}
 
public function projects_descriptions()
{
    return $this->belongsTo('App\Models\Projects_descriptions', 'foreign_key');
}
 
public function projects_databases()
{
    return $this->belongsTo('App\Models\Projects_databases', 'foreign_key');
}
 
public function parameters_users()
{
    return $this->belongsTo('App\Models\Parameters_users', 'foreign_key');
}
 
public function parameters_generals()
{
    return $this->belongsTo('App\Models\Parameters_generals', 'foreign_key');
}
 
}

