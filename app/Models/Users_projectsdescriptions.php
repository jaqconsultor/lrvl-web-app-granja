<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users_projectsdescriptions extends Model
{
    protected $table = 'users_projectsdescriptions';
    protected $fillable = ['id','created_at','updated_at','id_user','id_descripobjects','fe_vencimiento','in_activerecord'];
 
}

