<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects_modules extends Model
{
    protected $table = 'projects_modules';
    protected $fillable = ['id','created_at','updated_at','id_projects','nb_module','in_activerecord'];
 
}

