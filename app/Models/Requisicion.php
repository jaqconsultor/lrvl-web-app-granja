<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requisicion extends Model
{
    protected $table = 'requisicion';
    protected $fillable = ['Id','fe_requisicion','id_chofer','in_estatus','in_impreso','in_retard','in_pret','fe_date_pre','id_pre_req'];
 
}

