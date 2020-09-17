<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects_sections extends Model
{
    protected $table = 'projects_sections';
    protected $fillable = ['id','created_at','updated_at','id_projects','nb_sections','in_activerecord'];
 
}

