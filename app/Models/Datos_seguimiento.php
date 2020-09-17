<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Datos_seguimiento extends Model
{
    protected $table = 'datos_seguimiento';
    protected $fillable = ['id','fe_registro','id_control','in_estado','tx_lugar','tx_temperatura','in_temperatura','tx_nota','tx_usu_crea'];
 
}

