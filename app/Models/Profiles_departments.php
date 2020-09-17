<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profiles_departments extends Model
{
    protected $table = 'profiles_departments';
    protected $fillable = ['id','created_at','updated_at','id_profiles','id_departments'];
 
}

