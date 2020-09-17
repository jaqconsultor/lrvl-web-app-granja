<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos_lineas extends Model
{
    protected $table = 'productos_lineas';
    protected $fillable = ['id_linea','descrip','fcrea','usuario','color_r','color_g','color_b'];
 
}

