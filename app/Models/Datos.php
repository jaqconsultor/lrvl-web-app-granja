<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    protected $table = 'datos';
    protected $fillable = ['nu_control','fe_factura','nu_factura','nu_comanda','id_cliente','id_chofer','ca_pal_azul_138','ca_pal_amar_138','ca_pal_azul_116','ca_pal_amar_116','ca_tot_138','ca_tot_116','id_lugar','id_camion','in_ver_doc','in_ref_ext','in_retorno','nu_requisicion','fe_entrega','ho_entrega','fe_hrrdv','nu_rdv','in_impreso','in_external','mo_factura','in_conforme','in_concilia','ca_pal_azul_138_c','ca_pal_amar_138_c','ca_pal_azul_116_c','ca_pal_amar_116_c','ca_pal_cage_138_c','ca_pal_cage_116_c','ca_tot_138_c','ca_tot_116_c','nu_fact_trans','mo_factura_trans','mo_tarifa','in_mf','in_mbc','in_mr','in_mfr','in_mbl','in_pret','in_seleccion','in_itrade','id_empresa','nu_grupo','mo_tasah','in_activo','ca_viaje','fe_salida','fe_llegada','nu_correlativo','nu_correlativo_cam','nu_awb','in_import','id_embarquement','id_aerolineas','in_tipo_import','nu_factura_final','nu_doaduana','nu_salida','nu_llegada','ca_cajas','in_sin_paletas','fe_import','fe_pickup','id_broken1','id_broken2','id_broken3','nu_fac_broken1','nu_fac_broken2','nu_fac_broken3','mo_broken1','mo_broken2','mo_broken3','id_nu_order','in_tipo_order','nu_bill_land','in_broken_usd1','in_broken_usd2','in_broken_usd3','id_temporada','id_corr_camion','in_sin_trasport','nu_requisicion2','fe_entrega2','ho_entrega2','mo_factura2','fe_hrrdv2','nu_rdv2','nu_fact_trans2','mo_factura_trans2','id_chofer2','nu_fac_Frais_A','mo_Frais_A','in_Frais_A','nu_fac_Navcan','mo_Navcan','in_Navcan','nu_fac_TerminalF','mo_TerminalF','in_TerminalF','nu_fac_Autre','mo_Autre','in_Autre','motif_Autre','fe_Frais_A','fe_Navcan','fe_Terminal','fe_Autre','mo_tx_Frais_A','mo_tx_Navcan','mo_tx_Terminal','mo_tx_Autre','fe_fact_trans','fe_broken1','fe_broken2','fe_broken3','in_f_mondeda1','Poids_Vol','mo_precio_p'];
 
}

