<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    protected $table = 'livraison';
    protected $fillable = ['Id','nb_Livraison','in_tipo','color_r','color_g','color_b','mo_taux','in_aereolinea'];
 
}

