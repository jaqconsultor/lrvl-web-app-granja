<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects_databases extends Model
{
    protected $table = 'projects_databases';
    protected $fillable = ['id','created_at','updated_at','id_projects','id_projects_modules','id_projects_sections','nb_databases','nb_acronym'];
 
}

