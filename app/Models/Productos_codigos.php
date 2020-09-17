<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos_codigos extends Model
{
    protected $table = 'productos_codigos';
    protected $fillable = ['id','cod_producto','nb_producto'];
 
}

