<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Datos_notas extends Model
{
    protected $table = 'datos_notas';
    protected $fillable = ['id','fe_registro','id_control','tx_nota','tx_usu_crea','tx_usu_ver','in_leido'];
 
}

