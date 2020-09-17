<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    protected $table = 'profiles';
    protected $fillable = ['id','created_at','updated_at','nb_profile','tx_description','in_activerecord'];
 
}

