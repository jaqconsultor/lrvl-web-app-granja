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
/Cruds/Mae_maestro/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='in_tipo'>IN_TIPO</label><input type='text' class='form-control' name='in_tipo' required='required' ><label for='nu_consecutivo'>NU_CONSECUTIVO</label><input type='text' class='form-control' name='nu_consecutivo' required='required' ><label for='fe_maestro'>FE_MAESTRO</label><input type='text' class='form-control' name='fe_maestro' required='required' ><label for='st_maestro'>ST_MAESTRO</label><input type='text' class='form-control' name='st_maestro' required='required' ><label for='tx_soumision'>TX_SOUMISION</label><input type='text' class='form-control' name='tx_soumision' required='required' ><label for='id_cliente'>ID_CLIENTE</label><input type='text' class='form-control' name='id_cliente' required='required' ><label for='nb_contacto'>NB_CONTACTO</label><input type='text' class='form-control' name='nb_contacto' required='required' ><label for='tx_condiciones'>TX_CONDICIONES</label><input type='text' class='form-control' name='tx_condiciones' required='required' ><label for='tx_detalle_librason'>TX_DETALLE_LIBRASON</label><input type='text' class='form-control' name='tx_detalle_librason' required='required' ><label for='fe_librason'>FE_LIBRASON</label><input type='text' class='form-control' name='fe_librason' required='required' ><label for='id_vendedor'>ID_VENDEDOR</label><input type='text' class='form-control' name='id_vendedor' required='required' ><label for='tx_nota'>TX_NOTA</label><input type='text' class='form-control' name='tx_nota' required='required' ><label for='mo_tps'>MO_TPS</label><input type='text' class='form-control' name='mo_tps' required='required' ><label for='mo_tpq'>MO_TPQ</label><input type='text' class='form-control' name='mo_tpq' required='required' ><label for='mo_total1'>MO_TOTAL1</label><input type='text' class='form-control' name='mo_total1' required='required' ><label for='mo_total'>MO_TOTAL</label><input type='text' class='form-control' name='mo_total' required='required' ><label for='id_nu_control'>ID_NU_CONTROL</label><input type='text' class='form-control' name='id_nu_control' required='required' ><label for='id_origenes'>ID_ORIGENES</label><input type='text' class='form-control' name='id_origenes' required='required' ><label for='in_usd'>IN_USD</label><input type='text' class='form-control' name='in_usd' required='required' ><label for='nu_tasa'>NU_TASA</label><input type='text' class='form-control' name='nu_tasa' required='required' ><label for='in_kilos'>IN_KILOS</label><input type='text' class='form-control' name='in_kilos' required='required' ><label for='in_calculo'>IN_CALCULO</label><input type='text' class='form-control' name='in_calculo' required='required' ><label for='id_login'>ID_LOGIN</label><input type='text' class='form-control' name='id_login' required='required' ><label for='nb_login'>NB_LOGIN</label><input type='text' class='form-control' name='nb_login' required='required' ><label for='id_empresa'>ID_EMPRESA</label><input type='text' class='form-control' name='id_empresa' required='required' ><label for='in_contenedor'>IN_CONTENEDOR</label><input type='text' class='form-control' name='in_contenedor' required='required' ><label for='in_numcontrol'>IN_NUMCONTROL</label><input type='text' class='form-control' name='in_numcontrol' required='required' ><label for='id_productor'>ID_PRODUCTOR</label><input type='text' class='form-control' name='id_productor' required='required' ><label for='in_paleta'>IN_PALETA</label><input type='text' class='form-control' name='in_paleta' required='required' ><label for='nu_telefono1'>NU_TELEFONO1</label><input type='text' class='form-control' name='nu_telefono1' required='required' ><label for='id_chofer'>ID_CHOFER</label><input type='text' class='form-control' name='id_chofer' required='required' ><label for='id_lugar'>ID_LUGAR</label><input type='text' class='form-control' name='id_lugar' required='required' ><label for='id_temporada'>ID_TEMPORADA</label><input type='text' class='form-control' name='id_temporada' required='required' ><label for='id_broker'>ID_BROKER</label><input type='text' class='form-control' name='id_broker' required='required' ><label for='mo_precio'>MO_PRECIO</label><input type='text' class='form-control' name='mo_precio' required='required' ><label for='in_ruta_paleta'>IN_RUTA_PALETA</label><input type='text' class='form-control' name='in_ruta_paleta' required='required' ><label for='in_typeb'>IN_TYPEB</label><input type='text' class='form-control' name='in_typeb' required='required' ><label for='in_proteccion'>IN_PROTECCION</label><input type='text' class='form-control' name='in_proteccion' required='required' ><label for='nu_paletes'>NU_PALETES</label><input type='text' class='form-control' name='nu_paletes' required='required' ><label for='nu_boites'>NU_BOITES</label><input type='text' class='form-control' name='nu_boites' required='required' ><label for='nu_tpaletes'>NU_TPALETES</label><input type='text' class='form-control' name='nu_tpaletes' required='required' ><label for='nu_tboites'>NU_TBOITES</label><input type='text' class='form-control' name='nu_tboites' required='required' ><label for='nu_busqueda'>NU_BUSQUEDA</label><input type='text' class='form-control' name='nu_busqueda' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Mae_maestro/lista
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
