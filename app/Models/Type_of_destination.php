<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type_of_destination extends Model
{
    protected $table = 'type_of_destination';
    protected $fillable = ['id','created_at','updated_at','nb_type_of_destination','nb_acronym'];
 
}

