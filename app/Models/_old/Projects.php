<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = 'projects';
    protected $fillable = ['id','created_at','updated_at','nb_project','nb_description','nb_acronym'];
 
public function departments()
{
    return $this->belongsTo('App\Models\Departments', 'foreign_key');
}
 
public function managements()
{
    return $this->belongsTo('App\Models\Managements', 'foreign_key');
}
 
public function parameters_generals()
{
    return $this->belongsTo('App\Models\Parameters_generals', 'foreign_key');
}
 
public function parameters_users()
{
    return $this->belongsTo('App\Models\Parameters_users', 'foreign_key');
}
 
public function projects_databases()
{
    return $this->belongsTo('App\Models\Projects_databases', 'foreign_key');
}
 
public function projects_db_cruds()
{
    return $this->belongsTo('App\Models\Projects_db_cruds', 'foreign_key');
}
 
public function projects_db_dynamic_lists()
{
    return $this->belongsTo('App\Models\Projects_db_dynamic_lists', 'foreign_key');
}
 
public function projects_db_querys()
{
    return $this->belongsTo('App\Models\Projects_db_querys', 'foreign_key');
}
 
public function projects_descriptions()
{
    return $this->belongsTo('App\Models\Projects_descriptions', 'foreign_key');
}
 
public function projects_modules()
{
    return $this->belongsTo('App\Models\Projects_modules', 'foreign_key');
}
 
public function projects_sections()
{
    return $this->belongsTo('App\Models\Projects_sections', 'foreign_key');
}
 
}

