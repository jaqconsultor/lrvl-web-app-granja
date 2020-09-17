@extends('template/template')

@section('site-page')
<div class="container-fluid">
    <div  class="row">
        <div class="col-xs-12 ">
            <div class="box">
             <div class="box-header">
                <div class="box-name">
                    <i class=""></i>
                    <span>
Listar DATOS
                        </span>
                </div>
                <div class="box-icons">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="expand-link">
                        <i class="fa fa-expand"></i>
                    </a>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
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
        <a href="{{url('
/Cruds/Datos/CrearNuevo
        ')}}" >
            <button  type="button" class="btn btn-primary">Añadir</button>
        </a>

       <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
            <thead>
                 <tr>
<th>NU_CONTROL</th><th>FE_FACTURA</th><th>NU_FACTURA</th><th>NU_COMANDA</th><th>ID_CLIENTE</th><th>ID_CHOFER</th><th>CA_PAL_AZUL_138</th><th>CA_PAL_AMAR_138</th><th>CA_PAL_AZUL_116</th><th>CA_PAL_AMAR_116</th><th>CA_TOT_138</th><th>CA_TOT_116</th><th>ID_LUGAR</th><th>ID_CAMION</th><th>IN_VER_DOC</th><th>IN_REF_EXT</th><th>IN_RETORNO</th><th>NU_REQUISICION</th><th>FE_ENTREGA</th><th>HO_ENTREGA</th><th>FE_HRRDV</th><th>NU_RDV</th><th>IN_IMPRESO</th><th>IN_EXTERNAL</th><th>MO_FACTURA</th><th>IN_CONFORME</th><th>IN_CONCILIA</th><th>CA_PAL_AZUL_138_C</th><th>CA_PAL_AMAR_138_C</th><th>CA_PAL_AZUL_116_C</th><th>CA_PAL_AMAR_116_C</th><th>CA_PAL_CAGE_138_C</th><th>CA_PAL_CAGE_116_C</th><th>CA_TOT_138_C</th><th>CA_TOT_116_C</th><th>NU_FACT_TRANS</th><th>MO_FACTURA_TRANS</th><th>MO_TARIFA</th><th>IN_MF</th><th>IN_MBC</th><th>IN_MR</th><th>IN_MFR</th><th>IN_MBL</th><th>IN_PRET</th><th>IN_SELECCION</th><th>IN_ITRADE</th><th>ID_EMPRESA</th><th>NU_GRUPO</th><th>MO_TASAH</th><th>IN_ACTIVO</th><th>CA_VIAJE</th><th>FE_SALIDA</th><th>FE_LLEGADA</th><th>NU_CORRELATIVO</th><th>NU_CORRELATIVO_CAM</th><th>NU_AWB</th><th>IN_IMPORT</th><th>ID_EMBARQUEMENT</th><th>ID_AEROLINEAS</th><th>IN_TIPO_IMPORT</th><th>NU_FACTURA_FINAL</th><th>NU_DOADUANA</th><th>NU_SALIDA</th><th>NU_LLEGADA</th><th>CA_CAJAS</th><th>IN_SIN_PALETAS</th><th>FE_IMPORT</th><th>FE_PICKUP</th><th>ID_BROKEN1</th><th>ID_BROKEN2</th><th>ID_BROKEN3</th><th>NU_FAC_BROKEN1</th><th>NU_FAC_BROKEN2</th><th>NU_FAC_BROKEN3</th><th>MO_BROKEN1</th><th>MO_BROKEN2</th><th>MO_BROKEN3</th><th>ID_NU_ORDER</th><th>IN_TIPO_ORDER</th><th>NU_BILL_LAND</th><th>IN_BROKEN_USD1</th><th>IN_BROKEN_USD2</th><th>IN_BROKEN_USD3</th><th>ID_TEMPORADA</th><th>ID_CORR_CAMION</th><th>IN_SIN_TRASPORT</th><th>NU_REQUISICION2</th><th>FE_ENTREGA2</th><th>HO_ENTREGA2</th><th>MO_FACTURA2</th><th>FE_HRRDV2</th><th>NU_RDV2</th><th>NU_FACT_TRANS2</th><th>MO_FACTURA_TRANS2</th><th>ID_CHOFER2</th><th>NU_FAC_FRAIS_A</th><th>MO_FRAIS_A</th><th>IN_FRAIS_A</th><th>NU_FAC_NAVCAN</th><th>MO_NAVCAN</th><th>IN_NAVCAN</th><th>NU_FAC_TERMINALF</th><th>MO_TERMINALF</th><th>IN_TERMINALF</th><th>NU_FAC_AUTRE</th><th>MO_AUTRE</th><th>IN_AUTRE</th><th>MOTIF_AUTRE</th><th>FE_FRAIS_A</th><th>FE_NAVCAN</th><th>FE_TERMINAL</th><th>FE_AUTRE</th><th>MO_TX_FRAIS_A</th><th>MO_TX_NAVCAN</th><th>MO_TX_TERMINAL</th><th>MO_TX_AUTRE</th><th>FE_FACT_TRANS</th><th>FE_BROKEN1</th><th>FE_BROKEN2</th><th>FE_BROKEN3</th><th>IN_F_MONDEDA1</th><th>POIDS_VOL</th><th>MO_PRECIO_P</th>
                    <th>Operaciones</th>
                           
                </tr>
             </thead>
            @if(count($data)>=1)
                @foreach($data as $d)
                    <tr>
<td>{{$d->nu_control}}</td><td>{{$d->fe_factura}}</td><td>{{$d->nu_factura}}</td><td>{{$d->nu_comanda}}</td><td>{{$d->id_cliente}}</td><td>{{$d->id_chofer}}</td><td>{{$d->ca_pal_azul_138}}</td><td>{{$d->ca_pal_amar_138}}</td><td>{{$d->ca_pal_azul_116}}</td><td>{{$d->ca_pal_amar_116}}</td><td>{{$d->ca_tot_138}}</td><td>{{$d->ca_tot_116}}</td><td>{{$d->id_lugar}}</td><td>{{$d->id_camion}}</td><td>{{$d->in_ver_doc}}</td><td>{{$d->in_ref_ext}}</td><td>{{$d->in_retorno}}</td><td>{{$d->nu_requisicion}}</td><td>{{$d->fe_entrega}}</td><td>{{$d->ho_entrega}}</td><td>{{$d->fe_hrrdv}}</td><td>{{$d->nu_rdv}}</td><td>{{$d->in_impreso}}</td><td>{{$d->in_external}}</td><td>{{$d->mo_factura}}</td><td>{{$d->in_conforme}}</td><td>{{$d->in_concilia}}</td><td>{{$d->ca_pal_azul_138_c}}</td><td>{{$d->ca_pal_amar_138_c}}</td><td>{{$d->ca_pal_azul_116_c}}</td><td>{{$d->ca_pal_amar_116_c}}</td><td>{{$d->ca_pal_cage_138_c}}</td><td>{{$d->ca_pal_cage_116_c}}</td><td>{{$d->ca_tot_138_c}}</td><td>{{$d->ca_tot_116_c}}</td><td>{{$d->nu_fact_trans}}</td><td>{{$d->mo_factura_trans}}</td><td>{{$d->mo_tarifa}}</td><td>{{$d->in_mf}}</td><td>{{$d->in_mbc}}</td><td>{{$d->in_mr}}</td><td>{{$d->in_mfr}}</td><td>{{$d->in_mbl}}</td><td>{{$d->in_pret}}</td><td>{{$d->in_seleccion}}</td><td>{{$d->in_itrade}}</td><td>{{$d->id_empresa}}</td><td>{{$d->nu_grupo}}</td><td>{{$d->mo_tasah}}</td><td>{{$d->in_activo}}</td><td>{{$d->ca_viaje}}</td><td>{{$d->fe_salida}}</td><td>{{$d->fe_llegada}}</td><td>{{$d->nu_correlativo}}</td><td>{{$d->nu_correlativo_cam}}</td><td>{{$d->nu_awb}}</td><td>{{$d->in_import}}</td><td>{{$d->id_embarquement}}</td><td>{{$d->id_aerolineas}}</td><td>{{$d->in_tipo_import}}</td><td>{{$d->nu_factura_final}}</td><td>{{$d->nu_doaduana}}</td><td>{{$d->nu_salida}}</td><td>{{$d->nu_llegada}}</td><td>{{$d->ca_cajas}}</td><td>{{$d->in_sin_paletas}}</td><td>{{$d->fe_import}}</td><td>{{$d->fe_pickup}}</td><td>{{$d->id_broken1}}</td><td>{{$d->id_broken2}}</td><td>{{$d->id_broken3}}</td><td>{{$d->nu_fac_broken1}}</td><td>{{$d->nu_fac_broken2}}</td><td>{{$d->nu_fac_broken3}}</td><td>{{$d->mo_broken1}}</td><td>{{$d->mo_broken2}}</td><td>{{$d->mo_broken3}}</td><td>{{$d->id_nu_order}}</td><td>{{$d->in_tipo_order}}</td><td>{{$d->nu_bill_land}}</td><td>{{$d->in_broken_usd1}}</td><td>{{$d->in_broken_usd2}}</td><td>{{$d->in_broken_usd3}}</td><td>{{$d->id_temporada}}</td><td>{{$d->id_corr_camion}}</td><td>{{$d->in_sin_trasport}}</td><td>{{$d->nu_requisicion2}}</td><td>{{$d->fe_entrega2}}</td><td>{{$d->ho_entrega2}}</td><td>{{$d->mo_factura2}}</td><td>{{$d->fe_hrrdv2}}</td><td>{{$d->nu_rdv2}}</td><td>{{$d->nu_fact_trans2}}</td><td>{{$d->mo_factura_trans2}}</td><td>{{$d->id_chofer2}}</td><td>{{$d->nu_fac_frais_a}}</td><td>{{$d->mo_frais_a}}</td><td>{{$d->in_frais_a}}</td><td>{{$d->nu_fac_navcan}}</td><td>{{$d->mo_navcan}}</td><td>{{$d->in_navcan}}</td><td>{{$d->nu_fac_terminalf}}</td><td>{{$d->mo_terminalf}}</td><td>{{$d->in_terminalf}}</td><td>{{$d->nu_fac_autre}}</td><td>{{$d->mo_autre}}</td><td>{{$d->in_autre}}</td><td>{{$d->motif_autre}}</td><td>{{$d->fe_frais_a}}</td><td>{{$d->fe_navcan}}</td><td>{{$d->fe_terminal}}</td><td>{{$d->fe_autre}}</td><td>{{$d->mo_tx_frais_a}}</td><td>{{$d->mo_tx_navcan}}</td><td>{{$d->mo_tx_terminal}}</td><td>{{$d->mo_tx_autre}}</td><td>{{$d->fe_fact_trans}}</td><td>{{$d->fe_broken1}}</td><td>{{$d->fe_broken2}}</td><td>{{$d->fe_broken3}}</td><td>{{$d->in_f_mondeda1}}</td><td>{{$d->poids_vol}}</td><td>{{$d->mo_precio_p}}</td>
                        <td>
<a href="{{url('/Cruds/Datos/Eliminar/'.$d->id)}}"><input type='button' class='btn'  value='Eliminar'></a>
<a href="{{url('/Cruds/Datos/Modificar/'.$d->id)}}"><input type='button' class='btn'  value='Modificar' ></a>
                        </td>

                    </tr>
                @endforeach
            @else
                <tr >
                    <td colspan="3">
                        No hay Registros Disponibles
                    </td>
                </tr>
            @endif
        </table>  
                    
         </div>
            
            </div>
        </div>
    </div>
</div>

            
@endsection
@section('javascript-code')


@endsection
