<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inv_ficha extends Model
{
    protected $table = 'inv_ficha';
    protected $fillable = ['id','nu_codebar','Id_Producto','fe_fecha','nu_sumacantidad'];
 
}

