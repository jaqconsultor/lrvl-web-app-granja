@extends('template/template')

@section('site-page')
    <div class="container">
    <br/>
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
        @elseif(session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif
    
        
</div>

<div class="container-fluid">
    <div  class="row">
        <div class="col-xs-12 ">
            <div class="box">
             <div class="box-header">
                <div class="box-name">
                    <i class=""></i>
                    <span>Modificar</span>
                </div>
                <div class="box-icons">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="expand-link">
                        <i class="fa fa-expand"></i>
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

<form action="{{url('/Cruds/Mae_maestro/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='in_tipo'>IN_TIPO</label><input type='text' class='form-control' name='in_tipo' value='{{$data->in_tipo}}' required='required' ><br><label for='nu_consecutivo'>NU_CONSECUTIVO</label><input type='text' class='form-control' name='nu_consecutivo' value='{{$data->nu_consecutivo}}' required='required' ><br><label for='fe_maestro'>FE_MAESTRO</label><input type='text' class='form-control' name='fe_maestro' value='{{$data->fe_maestro}}' required='required' ><br><label for='st_maestro'>ST_MAESTRO</label><input type='text' class='form-control' name='st_maestro' value='{{$data->st_maestro}}' required='required' ><br><label for='tx_soumision'>TX_SOUMISION</label><input type='text' class='form-control' name='tx_soumision' value='{{$data->tx_soumision}}' required='required' ><br><label for='id_cliente'>ID_CLIENTE</label><input type='text' class='form-control' name='id_cliente' value='{{$data->id_cliente}}' required='required' ><br><label for='nb_contacto'>NB_CONTACTO</label><input type='text' class='form-control' name='nb_contacto' value='{{$data->nb_contacto}}' required='required' ><br><label for='tx_condiciones'>TX_CONDICIONES</label><input type='text' class='form-control' name='tx_condiciones' value='{{$data->tx_condiciones}}' required='required' ><br><label for='tx_detalle_librason'>TX_DETALLE_LIBRASON</label><input type='text' class='form-control' name='tx_detalle_librason' value='{{$data->tx_detalle_librason}}' required='required' ><br><label for='fe_librason'>FE_LIBRASON</label><input type='text' class='form-control' name='fe_librason' value='{{$data->fe_librason}}' required='required' ><br><label for='id_vendedor'>ID_VENDEDOR</label><input type='text' class='form-control' name='id_vendedor' value='{{$data->id_vendedor}}' required='required' ><br><label for='tx_nota'>TX_NOTA</label><input type='text' class='form-control' name='tx_nota' value='{{$data->tx_nota}}' required='required' ><br><label for='mo_tps'>MO_TPS</label><input type='text' class='form-control' name='mo_tps' value='{{$data->mo_tps}}' required='required' ><br><label for='mo_tpq'>MO_TPQ</label><input type='text' class='form-control' name='mo_tpq' value='{{$data->mo_tpq}}' required='required' ><br><label for='mo_total1'>MO_TOTAL1</label><input type='text' class='form-control' name='mo_total1' value='{{$data->mo_total1}}' required='required' ><br><label for='mo_total'>MO_TOTAL</label><input type='text' class='form-control' name='mo_total' value='{{$data->mo_total}}' required='required' ><br><label for='id_nu_control'>ID_NU_CONTROL</label><input type='text' class='form-control' name='id_nu_control' value='{{$data->id_nu_control}}' required='required' ><br><label for='id_origenes'>ID_ORIGENES</label><input type='text' class='form-control' name='id_origenes' value='{{$data->id_origenes}}' required='required' ><br><label for='in_usd'>IN_USD</label><input type='text' class='form-control' name='in_usd' value='{{$data->in_usd}}' required='required' ><br><label for='nu_tasa'>NU_TASA</label><input type='text' class='form-control' name='nu_tasa' value='{{$data->nu_tasa}}' required='required' ><br><label for='in_kilos'>IN_KILOS</label><input type='text' class='form-control' name='in_kilos' value='{{$data->in_kilos}}' required='required' ><br><label for='in_calculo'>IN_CALCULO</label><input type='text' class='form-control' name='in_calculo' value='{{$data->in_calculo}}' required='required' ><br><label for='id_login'>ID_LOGIN</label><input type='text' class='form-control' name='id_login' value='{{$data->id_login}}' required='required' ><br><label for='nb_login'>NB_LOGIN</label><input type='text' class='form-control' name='nb_login' value='{{$data->nb_login}}' required='required' ><br><label for='id_empresa'>ID_EMPRESA</label><input type='text' class='form-control' name='id_empresa' value='{{$data->id_empresa}}' required='required' ><br><label for='in_contenedor'>IN_CONTENEDOR</label><input type='text' class='form-control' name='in_contenedor' value='{{$data->in_contenedor}}' required='required' ><br><label for='in_numcontrol'>IN_NUMCONTROL</label><input type='text' class='form-control' name='in_numcontrol' value='{{$data->in_numcontrol}}' required='required' ><br><label for='id_productor'>ID_PRODUCTOR</label><input type='text' class='form-control' name='id_productor' value='{{$data->id_productor}}' required='required' ><br><label for='in_paleta'>IN_PALETA</label><input type='text' class='form-control' name='in_paleta' value='{{$data->in_paleta}}' required='required' ><br><label for='nu_telefono1'>NU_TELEFONO1</label><input type='text' class='form-control' name='nu_telefono1' value='{{$data->nu_telefono1}}' required='required' ><br><label for='id_chofer'>ID_CHOFER</label><input type='text' class='form-control' name='id_chofer' value='{{$data->id_chofer}}' required='required' ><br><label for='id_lugar'>ID_LUGAR</label><input type='text' class='form-control' name='id_lugar' value='{{$data->id_lugar}}' required='required' ><br><label for='id_temporada'>ID_TEMPORADA</label><input type='text' class='form-control' name='id_temporada' value='{{$data->id_temporada}}' required='required' ><br><label for='id_broker'>ID_BROKER</label><input type='text' class='form-control' name='id_broker' value='{{$data->id_broker}}' required='required' ><br><label for='mo_precio'>MO_PRECIO</label><input type='text' class='form-control' name='mo_precio' value='{{$data->mo_precio}}' required='required' ><br><label for='in_ruta_paleta'>IN_RUTA_PALETA</label><input type='text' class='form-control' name='in_ruta_paleta' value='{{$data->in_ruta_paleta}}' required='required' ><br><label for='in_typeb'>IN_TYPEB</label><input type='text' class='form-control' name='in_typeb' value='{{$data->in_typeb}}' required='required' ><br><label for='in_proteccion'>IN_PROTECCION</label><input type='text' class='form-control' name='in_proteccion' value='{{$data->in_proteccion}}' required='required' ><br><label for='nu_paletes'>NU_PALETES</label><input type='text' class='form-control' name='nu_paletes' value='{{$data->nu_paletes}}' required='required' ><br><label for='nu_boites'>NU_BOITES</label><input type='text' class='form-control' name='nu_boites' value='{{$data->nu_boites}}' required='required' ><br><label for='nu_tpaletes'>NU_TPALETES</label><input type='text' class='form-control' name='nu_tpaletes' value='{{$data->nu_tpaletes}}' required='required' ><br><label for='nu_tboites'>NU_TBOITES</label><input type='text' class='form-control' name='nu_tboites' value='{{$data->nu_tboites}}' required='required' ><br><label for='nu_busqueda'>NU_BUSQUEDA</label><input type='text' class='form-control' name='nu_busqueda' value='{{$data->nu_busqueda}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Mae_maestro/lista
               ')}}">
               <button type="button" class="btn btn-primary">Volver</button>
               </a>
              </div>
           </form>
                    
         </div>
            
        </div>
        </div>
    </div>
</div>

            
@endsection
@section('javascript-code')


@endsection
