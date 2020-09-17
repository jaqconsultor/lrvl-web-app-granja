<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aereolineas extends Model
{
    protected $table = 'aereolineas';
    protected $fillable = ['id','nb_aereolinea','code_aereo','m_tarifa'];
 
}

