<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $table = 'departments';
    protected $fillable = ['id','created_at','updated_at','id_managements','id_projects','nb_department','nb_acronym','in_activerecord'];
 
}

