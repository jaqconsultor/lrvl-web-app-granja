<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Managements extends Model
{
    protected $table = 'managements';
    protected $fillable = ['id','created_at','updated_at','id_projects','nb_management','nb_acronym','in_activerecord'];
 
public function projects()
{
    return $this->hasOne('App\Models\Projects', 'foreign_key');
}
 
public function departments()
{
    return $this->belongsTo('App\Models\Departments', 'foreign_key');
}
 
}

