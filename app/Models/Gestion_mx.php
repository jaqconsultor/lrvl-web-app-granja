<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gestion_mx extends Model
{
    protected $table = 'gestion_mx';
    protected $fillable = ['id','nu_fact','fe_factura','nu_cant','id_producto_caja','id_proveedor','id_productor','mo_precio','mo_sub_total'];
 
}

