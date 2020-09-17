<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class In_activerecord extends Model
{
    protected $table = 'in_activerecord';
    protected $fillable = ['id','created_at','updated_at','in_activerecord','nb_activerecord'];
 
}

