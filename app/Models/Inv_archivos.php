<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inv_archivos extends Model
{
    protected $table = 'inv_archivos';
    protected $fillable = ['id','nb_archivo','fe_carga','in_activo'];
 
}

