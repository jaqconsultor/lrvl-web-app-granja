<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects_db_querys extends Model
{
    protected $table = 'projects_db_querys';
    protected $fillable = ['id','created_at','updated_at','id_projects_databases','id_projects','in_activerecord','tx_description','tx_sql','in_ejecuted'];
 
public function projects()
{
    return $this->hasOne('App\Models\Projects', 'foreign_key');
}
 
public function projects_databases()
{
    return $this->hasOne('App\Models\Projects_databases', 'foreign_key');
}
 
}

