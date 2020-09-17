<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = 'projects';
    protected $fillable = ['id','created_at','updated_at','nb_project','nb_description','nb_acronym'];
 
}

