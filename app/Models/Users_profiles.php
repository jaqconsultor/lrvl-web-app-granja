<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users_profiles extends Model
{
    protected $table = 'users_profiles';
    protected $fillable = ['id','created_at','updated_at','id_user','id_profile','fe_vencimiento','in_activerecord'];
 
}

