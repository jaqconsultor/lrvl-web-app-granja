<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Embarquement extends Model
{
    protected $table = 'embarquement';
    protected $fillable = ['id','nb_embarquement','code_country','code_place'];
 
}

