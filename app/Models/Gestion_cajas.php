<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gestion_cajas extends Model
{
    protected $table = 'gestion_cajas';
    protected $fillable = ['id','nb_gestion_cajas','in_activo','tx_talla_caja','nu_piezas_caja','ca_peso_cajas','ca_peso_min','ca_peso_max','in_peso','ca_kilos_caja','nu_caja_etage','nu_caja_palete','ca_long_bouquet','in_orientacion_bouquet','in_glace','in_glace_Haut','in_glace_Bas','in_glace_Centre','in_glace_Fond','ca_kilos_caja1','in_autre','in_autre_Haut','in_autre_Bas','in_autre_Centre','ca_total_poids','id_producto','in_prod_caja','id_prod_twistt','mo_precio','tx_espanol','fe_registro','fe_ult_act','in_unite','tx_nota','mo_precio_prix'];
 
}

