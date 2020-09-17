<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos_modelos extends Model
{
    protected $table = 'productos_modelos';
    protected $fillable = ['id_linea','id_marca','id_modelo','descrip','fcrea','usuario','color_r','color_g','color_b'];
 
}

