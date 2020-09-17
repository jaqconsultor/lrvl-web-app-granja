<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userprofilephotos extends Model
{
    protected $table = 'userprofilephotos';
    protected $fillable = ['id','created_at','updated_at','tx_photofile','id_user','in_verified'];
 
}

