<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rgastos_conceptos extends Model
{
    protected $table = 'rgastos_conceptos';
    protected $fillable = ['id','nb_conceptos','in_suma'];
 
}

