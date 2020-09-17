<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tdatos extends Model
{
    protected $table = 'tdatos';
    protected $fillable = ['control','fecha','factura','comande','cliente','chofer','pal_azul_138','pal_amari_138','pal_azul_116','pal_amari_116','tot_138','tot_116','lugar','camion','ver_doc','ref_ext','retorno'];
 
}

