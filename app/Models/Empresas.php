<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    protected $table = 'empresas';
    protected $fillable = ['id','nb_empresa','No_Imported','No_Douaniere','Membership','TPS','tx_2direccion','tx_2direccion1','tx_2direccion2','tx_2direccion3','tx_2direccion4','tx_2direccion5','tx_direccion','tx_direccion1','tx_direccion2','tx_direccion3','tx_direccion4','tx_direccion5','tx_logo'];
 
}

