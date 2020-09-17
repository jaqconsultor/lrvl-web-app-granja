<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = ['id','created_at','updated_at','login','name','email','password','in_verified','remember_token'];
 
}

