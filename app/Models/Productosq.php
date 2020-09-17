<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productosq extends Model
{
    protected $table = 'productosq';
    protected $fillable = ['CodigoPRD','NombrePRD','Memo','Memo2','Co_Solicitud','Co_Aprobado','Fecha_Aprobado','id_mit','id_origen'];
 
}

