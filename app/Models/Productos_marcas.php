<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos_marcas extends Model
{
    protected $table = 'productos_marcas';
    protected $fillable = ['id_linea','id_marca','descrip','fcrea','usuario','color_r','color_g','color_b'];
 
}

