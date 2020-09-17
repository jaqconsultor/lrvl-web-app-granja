<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requisicion_detalle extends Model
{
    protected $table = 'requisicion_detalle';
    protected $fillable = ['Iddetalle','idrequisicion','id_control'];
 
}

