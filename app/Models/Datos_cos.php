<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Datos_cos extends Model
{
    protected $table = 'datos_cos';
    protected $fillable = ['id','id_nu_control','id_productos_codigos','id_origenes','in_kilos','in_usd','nu_tasa','mo_tot_poinds','mo_pkg','mo_precio','mo_sub_total','in_calculo','id_prod_twistt','id_prod_boite','nu_Facteur'];
 
}

