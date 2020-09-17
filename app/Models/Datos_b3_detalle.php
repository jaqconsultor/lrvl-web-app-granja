<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Datos_b3_detalle extends Model
{
    protected $table = 'datos_b3_detalle';
    protected $fillable = ['id','usuario','nu_registro','cod_aduana','nb_productos','ca_registros','mo_suma_can','mo_suma_usd','nu_control','tmo_tot_poinds'];
 
}

