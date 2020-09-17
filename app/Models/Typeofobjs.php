<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Typeofobjs extends Model
{
    protected $table = 'typeofobjs';
    protected $fillable = ['id','created_at','updated_at','nb_typeofobjs','nb_acronym'];
 
}

