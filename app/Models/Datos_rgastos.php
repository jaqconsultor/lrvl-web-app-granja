<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Datos_rgastos extends Model
{
    protected $table = 'datos_rgastos';
    protected $fillable = ['id','fe_registro','id_control','nu_order','id_rgasto_concepto','in_suma','mo_gasto'];
 
}

