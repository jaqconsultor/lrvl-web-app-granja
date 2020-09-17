<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'productos';
    protected $fillable = ['id_producto','id_linea','id_marca','id_modelo','descrip','valorv','valor2','valor3','existmin','existen','ultprov','docprov','valorc','fecultact','fcrea','usuario','id_tipo','cantidad','preciop','estado','code_bar_internal','code_bar_external','code_bar_upc','tentrega','id_prov','id_unidadm','cod_aduana','id_producto_codigo','in_gestionable','in_caja','in_twistt','id_primaria'];
 
}

