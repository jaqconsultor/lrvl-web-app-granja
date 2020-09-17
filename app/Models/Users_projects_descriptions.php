<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users_projects_descriptions extends Model
{
    protected $table = 'users_projects_descriptions';
    protected $fillable = ['id','created_at','updated_at','id_users','id_projects_descriptions','fe_vencimiento','in_activerecord'];
 
}

