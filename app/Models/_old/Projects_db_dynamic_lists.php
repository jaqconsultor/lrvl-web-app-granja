<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects_db_dynamic_lists extends Model
{
    protected $table = 'projects_db_dynamic_lists';
    protected $fillable = ['id','created_at','updated_at','id_projects_databases','id_projects','nb_lists','co_lists','nb_descripcion'];
 
public function projects_databases()
{
    return $this->hasOne('App\Models\Projects_databases', 'foreign_key');
}
 
public function projects()
{
    return $this->hasOne('App\Models\Projects', 'foreign_key');
}
 
}

