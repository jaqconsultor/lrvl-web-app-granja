<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table = 'clients';
    protected $fillable = ['Id','nb_Clients','in_tipo_cli','tx_direccion','tx_direccion1','tx_direccion2','tx_direccion3','tx_direccion4','tx_direccion5','nb_contacto','nu_cod_referencia','nu_telefono1','nu_telefono2','in_transport'];
 
}

