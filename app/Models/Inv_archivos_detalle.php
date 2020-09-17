<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inv_archivos_detalle extends Model
{
    protected $table = 'inv_archivos_detalle';
    protected $fillable = ['id','id_inv_archivos','nu_codebar','nu_cantidad'];
 
}

