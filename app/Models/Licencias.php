<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Licencias extends Model
{
    protected $table = 'licencias';
    protected $fillable = ['id','id_Empresa','fe_Facture','Nu_Facture','tx_Licencia','tx_Code_licencia','In_estado','nu_autorizacion','Fe_inicio','fe_final','In_abono','in_seleccion'];
 
}

