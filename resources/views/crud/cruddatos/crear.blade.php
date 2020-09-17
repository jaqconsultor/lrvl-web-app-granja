@extends('template/template')

@section('site-page')
<div class="container-fluid">
    <div  class="row">
        <div class="col-xs-12 ">
            <div class="box">
             <div class="box-header">
                <div class="box-name">
                    <i class=""></i>
                    <span>Cargar  Nuevo  Complemento</span>
                </div>
                <div class="box-icons">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="expand-link">
                        <i class="fa fa-expand"></i>
                    </a>
                <!--   <a class="close-link">
                        <i class="fa fa-times"></i>
                      </a> -->

                </div>
                <div class="no-move"></div>
            </div>
          <div class="box-content">
              @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $e)
                    <li>{{$e}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session('mensaje'))
        <div class="alert alert-success">{{session('mensaje')}}</div>
    @endif
        
<form action="{{url('
/Cruds/Datos/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='nu_control'>NU_CONTROL</label><input type='text' class='form-control' name='nu_control' required='required' ><label for='fe_factura'>FE_FACTURA</label><input type='text' class='form-control' name='fe_factura' required='required' ><label for='nu_factura'>NU_FACTURA</label><input type='text' class='form-control' name='nu_factura' required='required' ><label for='nu_comanda'>NU_COMANDA</label><input type='text' class='form-control' name='nu_comanda' required='required' ><label for='id_cliente'>ID_CLIENTE</label><input type='text' class='form-control' name='id_cliente' required='required' ><label for='id_chofer'>ID_CHOFER</label><input type='text' class='form-control' name='id_chofer' required='required' ><label for='ca_pal_azul_138'>CA_PAL_AZUL_138</label><input type='text' class='form-control' name='ca_pal_azul_138' required='required' ><label for='ca_pal_amar_138'>CA_PAL_AMAR_138</label><input type='text' class='form-control' name='ca_pal_amar_138' required='required' ><label for='ca_pal_azul_116'>CA_PAL_AZUL_116</label><input type='text' class='form-control' name='ca_pal_azul_116' required='required' ><label for='ca_pal_amar_116'>CA_PAL_AMAR_116</label><input type='text' class='form-control' name='ca_pal_amar_116' required='required' ><label for='ca_tot_138'>CA_TOT_138</label><input type='text' class='form-control' name='ca_tot_138' required='required' ><label for='ca_tot_116'>CA_TOT_116</label><input type='text' class='form-control' name='ca_tot_116' required='required' ><label for='id_lugar'>ID_LUGAR</label><input type='text' class='form-control' name='id_lugar' required='required' ><label for='id_camion'>ID_CAMION</label><input type='text' class='form-control' name='id_camion' required='required' ><label for='in_ver_doc'>IN_VER_DOC</label><input type='text' class='form-control' name='in_ver_doc' required='required' ><label for='in_ref_ext'>IN_REF_EXT</label><input type='text' class='form-control' name='in_ref_ext' required='required' ><label for='in_retorno'>IN_RETORNO</label><input type='text' class='form-control' name='in_retorno' required='required' ><label for='nu_requisicion'>NU_REQUISICION</label><input type='text' class='form-control' name='nu_requisicion' required='required' ><label for='fe_entrega'>FE_ENTREGA</label><input type='text' class='form-control' name='fe_entrega' required='required' ><label for='ho_entrega'>HO_ENTREGA</label><input type='text' class='form-control' name='ho_entrega' required='required' ><label for='fe_hrrdv'>FE_HRRDV</label><input type='text' class='form-control' name='fe_hrrdv' required='required' ><label for='nu_rdv'>NU_RDV</label><input type='text' class='form-control' name='nu_rdv' required='required' ><label for='in_impreso'>IN_IMPRESO</label><input type='text' class='form-control' name='in_impreso' required='required' ><label for='in_external'>IN_EXTERNAL</label><input type='text' class='form-control' name='in_external' required='required' ><label for='mo_factura'>MO_FACTURA</label><input type='text' class='form-control' name='mo_factura' required='required' ><label for='in_conforme'>IN_CONFORME</label><input type='text' class='form-control' name='in_conforme' required='required' ><label for='in_concilia'>IN_CONCILIA</label><input type='text' class='form-control' name='in_concilia' required='required' ><label for='ca_pal_azul_138_c'>CA_PAL_AZUL_138_C</label><input type='text' class='form-control' name='ca_pal_azul_138_c' required='required' ><label for='ca_pal_amar_138_c'>CA_PAL_AMAR_138_C</label><input type='text' class='form-control' name='ca_pal_amar_138_c' required='required' ><label for='ca_pal_azul_116_c'>CA_PAL_AZUL_116_C</label><input type='text' class='form-control' name='ca_pal_azul_116_c' required='required' ><label for='ca_pal_amar_116_c'>CA_PAL_AMAR_116_C</label><input type='text' class='form-control' name='ca_pal_amar_116_c' required='required' ><label for='ca_pal_cage_138_c'>CA_PAL_CAGE_138_C</label><input type='text' class='form-control' name='ca_pal_cage_138_c' required='required' ><label for='ca_pal_cage_116_c'>CA_PAL_CAGE_116_C</label><input type='text' class='form-control' name='ca_pal_cage_116_c' required='required' ><label for='ca_tot_138_c'>CA_TOT_138_C</label><input type='text' class='form-control' name='ca_tot_138_c' required='required' ><label for='ca_tot_116_c'>CA_TOT_116_C</label><input type='text' class='form-control' name='ca_tot_116_c' required='required' ><label for='nu_fact_trans'>NU_FACT_TRANS</label><input type='text' class='form-control' name='nu_fact_trans' required='required' ><label for='mo_factura_trans'>MO_FACTURA_TRANS</label><input type='text' class='form-control' name='mo_factura_trans' required='required' ><label for='mo_tarifa'>MO_TARIFA</label><input type='text' class='form-control' name='mo_tarifa' required='required' ><label for='in_mf'>IN_MF</label><input type='text' class='form-control' name='in_mf' required='required' ><label for='in_mbc'>IN_MBC</label><input type='text' class='form-control' name='in_mbc' required='required' ><label for='in_mr'>IN_MR</label><input type='text' class='form-control' name='in_mr' required='required' ><label for='in_mfr'>IN_MFR</label><input type='text' class='form-control' name='in_mfr' required='required' ><label for='in_mbl'>IN_MBL</label><input type='text' class='form-control' name='in_mbl' required='required' ><label for='in_pret'>IN_PRET</label><input type='text' class='form-control' name='in_pret' required='required' ><label for='in_seleccion'>IN_SELECCION</label><input type='text' class='form-control' name='in_seleccion' required='required' ><label for='in_itrade'>IN_ITRADE</label><input type='text' class='form-control' name='in_itrade' required='required' ><label for='id_empresa'>ID_EMPRESA</label><input type='text' class='form-control' name='id_empresa' required='required' ><label for='nu_grupo'>NU_GRUPO</label><input type='text' class='form-control' name='nu_grupo' required='required' ><label for='mo_tasah'>MO_TASAH</label><input type='text' class='form-control' name='mo_tasah' required='required' ><label for='in_activo'>IN_ACTIVO</label><input type='text' class='form-control' name='in_activo' required='required' ><label for='ca_viaje'>CA_VIAJE</label><input type='text' class='form-control' name='ca_viaje' required='required' ><label for='fe_salida'>FE_SALIDA</label><input type='text' class='form-control' name='fe_salida' required='required' ><label for='fe_llegada'>FE_LLEGADA</label><input type='text' class='form-control' name='fe_llegada' required='required' ><label for='nu_correlativo'>NU_CORRELATIVO</label><input type='text' class='form-control' name='nu_correlativo' required='required' ><label for='nu_correlativo_cam'>NU_CORRELATIVO_CAM</label><input type='text' class='form-control' name='nu_correlativo_cam' required='required' ><label for='nu_awb'>NU_AWB</label><input type='text' class='form-control' name='nu_awb' required='required' ><label for='in_import'>IN_IMPORT</label><input type='text' class='form-control' name='in_import' required='required' ><label for='id_embarquement'>ID_EMBARQUEMENT</label><input type='text' class='form-control' name='id_embarquement' required='required' ><label for='id_aerolineas'>ID_AEROLINEAS</label><input type='text' class='form-control' name='id_aerolineas' required='required' ><label for='in_tipo_import'>IN_TIPO_IMPORT</label><input type='text' class='form-control' name='in_tipo_import' required='required' ><label for='nu_factura_final'>NU_FACTURA_FINAL</label><input type='text' class='form-control' name='nu_factura_final' required='required' ><label for='nu_doaduana'>NU_DOADUANA</label><input type='text' class='form-control' name='nu_doaduana' required='required' ><label for='nu_salida'>NU_SALIDA</label><input type='text' class='form-control' name='nu_salida' required='required' ><label for='nu_llegada'>NU_LLEGADA</label><input type='text' class='form-control' name='nu_llegada' required='required' ><label for='ca_cajas'>CA_CAJAS</label><input type='text' class='form-control' name='ca_cajas' required='required' ><label for='in_sin_paletas'>IN_SIN_PALETAS</label><input type='text' class='form-control' name='in_sin_paletas' required='required' ><label for='fe_import'>FE_IMPORT</label><input type='text' class='form-control' name='fe_import' required='required' ><label for='fe_pickup'>FE_PICKUP</label><input type='text' class='form-control' name='fe_pickup' required='required' ><label for='id_broken1'>ID_BROKEN1</label><input type='text' class='form-control' name='id_broken1' required='required' ><label for='id_broken2'>ID_BROKEN2</label><input type='text' class='form-control' name='id_broken2' required='required' ><label for='id_broken3'>ID_BROKEN3</label><input type='text' class='form-control' name='id_broken3' required='required' ><label for='nu_fac_broken1'>NU_FAC_BROKEN1</label><input type='text' class='form-control' name='nu_fac_broken1' required='required' ><label for='nu_fac_broken2'>NU_FAC_BROKEN2</label><input type='text' class='form-control' name='nu_fac_broken2' required='required' ><label for='nu_fac_broken3'>NU_FAC_BROKEN3</label><input type='text' class='form-control' name='nu_fac_broken3' required='required' ><label for='mo_broken1'>MO_BROKEN1</label><input type='text' class='form-control' name='mo_broken1' required='required' ><label for='mo_broken2'>MO_BROKEN2</label><input type='text' class='form-control' name='mo_broken2' required='required' ><label for='mo_broken3'>MO_BROKEN3</label><input type='text' class='form-control' name='mo_broken3' required='required' ><label for='id_nu_order'>ID_NU_ORDER</label><input type='text' class='form-control' name='id_nu_order' required='required' ><label for='in_tipo_order'>IN_TIPO_ORDER</label><input type='text' class='form-control' name='in_tipo_order' required='required' ><label for='nu_bill_land'>NU_BILL_LAND</label><input type='text' class='form-control' name='nu_bill_land' required='required' ><label for='in_broken_usd1'>IN_BROKEN_USD1</label><input type='text' class='form-control' name='in_broken_usd1' required='required' ><label for='in_broken_usd2'>IN_BROKEN_USD2</label><input type='text' class='form-control' name='in_broken_usd2' required='required' ><label for='in_broken_usd3'>IN_BROKEN_USD3</label><input type='text' class='form-control' name='in_broken_usd3' required='required' ><label for='id_temporada'>ID_TEMPORADA</label><input type='text' class='form-control' name='id_temporada' required='required' ><label for='id_corr_camion'>ID_CORR_CAMION</label><input type='text' class='form-control' name='id_corr_camion' required='required' ><label for='in_sin_trasport'>IN_SIN_TRASPORT</label><input type='text' class='form-control' name='in_sin_trasport' required='required' ><label for='nu_requisicion2'>NU_REQUISICION2</label><input type='text' class='form-control' name='nu_requisicion2' required='required' ><label for='fe_entrega2'>FE_ENTREGA2</label><input type='text' class='form-control' name='fe_entrega2' required='required' ><label for='ho_entrega2'>HO_ENTREGA2</label><input type='text' class='form-control' name='ho_entrega2' required='required' ><label for='mo_factura2'>MO_FACTURA2</label><input type='text' class='form-control' name='mo_factura2' required='required' ><label for='fe_hrrdv2'>FE_HRRDV2</label><input type='text' class='form-control' name='fe_hrrdv2' required='required' ><label for='nu_rdv2'>NU_RDV2</label><input type='text' class='form-control' name='nu_rdv2' required='required' ><label for='nu_fact_trans2'>NU_FACT_TRANS2</label><input type='text' class='form-control' name='nu_fact_trans2' required='required' ><label for='mo_factura_trans2'>MO_FACTURA_TRANS2</label><input type='text' class='form-control' name='mo_factura_trans2' required='required' ><label for='id_chofer2'>ID_CHOFER2</label><input type='text' class='form-control' name='id_chofer2' required='required' ><label for='nu_fac_frais_a'>NU_FAC_FRAIS_A</label><input type='text' class='form-control' name='nu_fac_frais_a' required='required' ><label for='mo_frais_a'>MO_FRAIS_A</label><input type='text' class='form-control' name='mo_frais_a' required='required' ><label for='in_frais_a'>IN_FRAIS_A</label><input type='text' class='form-control' name='in_frais_a' required='required' ><label for='nu_fac_navcan'>NU_FAC_NAVCAN</label><input type='text' class='form-control' name='nu_fac_navcan' required='required' ><label for='mo_navcan'>MO_NAVCAN</label><input type='text' class='form-control' name='mo_navcan' required='required' ><label for='in_navcan'>IN_NAVCAN</label><input type='text' class='form-control' name='in_navcan' required='required' ><label for='nu_fac_terminalf'>NU_FAC_TERMINALF</label><input type='text' class='form-control' name='nu_fac_terminalf' required='required' ><label for='mo_terminalf'>MO_TERMINALF</label><input type='text' class='form-control' name='mo_terminalf' required='required' ><label for='in_terminalf'>IN_TERMINALF</label><input type='text' class='form-control' name='in_terminalf' required='required' ><label for='nu_fac_autre'>NU_FAC_AUTRE</label><input type='text' class='form-control' name='nu_fac_autre' required='required' ><label for='mo_autre'>MO_AUTRE</label><input type='text' class='form-control' name='mo_autre' required='required' ><label for='in_autre'>IN_AUTRE</label><input type='text' class='form-control' name='in_autre' required='required' ><label for='motif_autre'>MOTIF_AUTRE</label><input type='text' class='form-control' name='motif_autre' required='required' ><label for='fe_frais_a'>FE_FRAIS_A</label><input type='text' class='form-control' name='fe_frais_a' required='required' ><label for='fe_navcan'>FE_NAVCAN</label><input type='text' class='form-control' name='fe_navcan' required='required' ><label for='fe_terminal'>FE_TERMINAL</label><input type='text' class='form-control' name='fe_terminal' required='required' ><label for='fe_autre'>FE_AUTRE</label><input type='text' class='form-control' name='fe_autre' required='required' ><label for='mo_tx_frais_a'>MO_TX_FRAIS_A</label><input type='text' class='form-control' name='mo_tx_frais_a' required='required' ><label for='mo_tx_navcan'>MO_TX_NAVCAN</label><input type='text' class='form-control' name='mo_tx_navcan' required='required' ><label for='mo_tx_terminal'>MO_TX_TERMINAL</label><input type='text' class='form-control' name='mo_tx_terminal' required='required' ><label for='mo_tx_autre'>MO_TX_AUTRE</label><input type='text' class='form-control' name='mo_tx_autre' required='required' ><label for='fe_fact_trans'>FE_FACT_TRANS</label><input type='text' class='form-control' name='fe_fact_trans' required='required' ><label for='fe_broken1'>FE_BROKEN1</label><input type='text' class='form-control' name='fe_broken1' required='required' ><label for='fe_broken2'>FE_BROKEN2</label><input type='text' class='form-control' name='fe_broken2' required='required' ><label for='fe_broken3'>FE_BROKEN3</label><input type='text' class='form-control' name='fe_broken3' required='required' ><label for='in_f_mondeda1'>IN_F_MONDEDA1</label><input type='text' class='form-control' name='in_f_mondeda1' required='required' ><label for='poids_vol'>POIDS_VOL</label><input type='text' class='form-control' name='poids_vol' required='required' ><label for='mo_precio_p'>MO_PRECIO_P</label><input type='text' class='form-control' name='mo_precio_p' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Datos/lista
            ')}}">
            <button type="button" class="btn btn-primary">Volver</button>
            </a>
            </div>
            {{ Form::close() }}
          
         </div>
            
    </div>
        </div>
    </div>
</div>
@endsection