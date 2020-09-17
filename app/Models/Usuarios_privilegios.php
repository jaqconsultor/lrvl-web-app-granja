<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios_privilegios extends Model
{
    protected $table = 'usuarios_privilegios';
    protected $fillable = ['login','codigo','Nombre','Opcion','estado'];
 
}

