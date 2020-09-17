<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userprofilebasics extends Model
{
    protected $table = 'userprofilebasics';
    protected $fillable = ['id','created_at','updated_at','id_user'];
 
}

