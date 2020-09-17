<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Managements extends Model
{
    protected $table = 'managements';
    protected $fillable = ['id','created_at','updated_at','id_projects','nb_management','nb_acronym','in_activerecord'];
 
}

