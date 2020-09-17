<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    protected $table = 'chauffeur';
    protected $fillable = ['Id','nb_Chauffeur','nb_direccion','nb_informacion','nu_tel1','nu_tel2','tx_email','in_tipo'];
 
}

