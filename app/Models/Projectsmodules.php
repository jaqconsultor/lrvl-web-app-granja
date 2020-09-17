<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projectsmodules extends Model
{
    protected $table = 'projectsmodules';
    protected $fillable = ['id','created_at','updated_at','nu_order','id_projects','nb_module','in_activerecord'];
 
}

