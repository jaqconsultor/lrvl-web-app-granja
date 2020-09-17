<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requisicion_pre extends Model
{
    protected $table = 'requisicion_pre';
    protected $fillable = ['id','fe_registro','tx_informacion','in_estado','in_import'];
 
}

