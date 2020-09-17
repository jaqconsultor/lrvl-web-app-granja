<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios_grp extends Model
{
    protected $table = 'usuarios_grp';
    protected $fillable = ['login','co_grupo'];
 
}

