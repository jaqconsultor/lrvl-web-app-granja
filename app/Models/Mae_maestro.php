<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mae_maestro extends Model
{
    protected $table = 'mae_maestro';
    protected $fillable = ['id','in_tipo','nu_consecutivo','fe_maestro','st_maestro','tx_soumision','id_cliente','nb_contacto','tx_condiciones','tx_detalle_librason','fe_librason','id_vendedor','tx_nota','mo_tps','mo_tpq','mo_total1','mo_total','id_nu_control','id_origenes','in_usd','nu_tasa','in_kilos','in_calculo','id_login','nb_login','id_empresa','in_contenedor','in_numcontrol','id_productor','in_paleta','nu_telefono1','id_chofer','id_lugar','id_temporada','id_broker','mo_precio','in_ruta_paleta','in_typeb','in_proteccion','nu_paletes','nu_boites','nu_tpaletes','nu_tboites','nu_busqueda'];
 
}

