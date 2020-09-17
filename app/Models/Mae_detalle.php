<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mae_detalle extends Model
{
    protected $table = 'mae_detalle';
    protected $fillable = ['id','in_tipo','nu_consecutivo','id_gestion_caja','id_nu_control','id_productos_codigos','id_origenes','in_kilos','in_usd','nu_tasa','mo_tot_poinds','mo_pkg','mo_precio','mo_sub_total','in_calculo','ca_productos','mo_pkg_confirmado','mo_pkg_recibido','mo_Recu','mo_Rejete','id_motif','nu_lote','mo_pkg_rechazo'];
 
}

