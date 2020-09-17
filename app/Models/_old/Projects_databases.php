<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects_databases extends Model
{
    protected $table = 'projects_databases';
    protected $fillable = ['id','created_at','updated_at','id_projects','id_projects_modules','id_projects_sections','nb_databases','nb_acronym'];
 
public function projects_db_querys()
{
    return $this->belongsTo('App\Models\Projects_db_querys', 'foreign_key');
}
 
public function projects_db_dynamic_lists()
{
    return $this->belongsTo('App\Models\Projects_db_dynamic_lists', 'foreign_key');
}
 
public function projects_db_cruds()
{
    return $this->belongsTo('App\Models\Projects_db_cruds', 'foreign_key');
}
 
public function projects_sections()
{
    return $this->hasOne('App\Models\Projects_sections', 'foreign_key');
}
 
public function projects_modules()
{
    return $this->hasOne('App\Models\Projects_modules', 'foreign_key');
}
 
public function projects()
{
    return $this->hasOne('App\Models\Projects', 'foreign_key');
}
 
}

