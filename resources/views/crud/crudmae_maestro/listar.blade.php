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
Listar MAE_MAESTRO
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
/Cruds/Mae_maestro/CrearNuevo
        ')}}" >
            <button  type="button" class="btn btn-primary">Añadir</button>
        </a>

       <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
            <thead>
                 <tr>
<th>ID</th><th>IN_TIPO</th><th>NU_CONSECUTIVO</th><th>FE_MAESTRO</th><th>ST_MAESTRO</th><th>TX_SOUMISION</th><th>ID_CLIENTE</th><th>NB_CONTACTO</th><th>TX_CONDICIONES</th><th>TX_DETALLE_LIBRASON</th><th>FE_LIBRASON</th><th>ID_VENDEDOR</th><th>TX_NOTA</th><th>MO_TPS</th><th>MO_TPQ</th><th>MO_TOTAL1</th><th>MO_TOTAL</th><th>ID_NU_CONTROL</th><th>ID_ORIGENES</th><th>IN_USD</th><th>NU_TASA</th><th>IN_KILOS</th><th>IN_CALCULO</th><th>ID_LOGIN</th><th>NB_LOGIN</th><th>ID_EMPRESA</th><th>IN_CONTENEDOR</th><th>IN_NUMCONTROL</th><th>ID_PRODUCTOR</th><th>IN_PALETA</th><th>NU_TELEFONO1</th><th>ID_CHOFER</th><th>ID_LUGAR</th><th>ID_TEMPORADA</th><th>ID_BROKER</th><th>MO_PRECIO</th><th>IN_RUTA_PALETA</th><th>IN_TYPEB</th><th>IN_PROTECCION</th><th>NU_PALETES</th><th>NU_BOITES</th><th>NU_TPALETES</th><th>NU_TBOITES</th><th>NU_BUSQUEDA</th>
                    <th>Operaciones</th>
                           
                </tr>
             </thead>
            @if(count($data)>=1)
                @foreach($data as $d)
                    <tr>
<td>{{$d->id}}</td><td>{{$d->in_tipo}}</td><td>{{$d->nu_consecutivo}}</td><td>{{$d->fe_maestro}}</td><td>{{$d->st_maestro}}</td><td>{{$d->tx_soumision}}</td><td>{{$d->id_cliente}}</td><td>{{$d->nb_contacto}}</td><td>{{$d->tx_condiciones}}</td><td>{{$d->tx_detalle_librason}}</td><td>{{$d->fe_librason}}</td><td>{{$d->id_vendedor}}</td><td>{{$d->tx_nota}}</td><td>{{$d->mo_tps}}</td><td>{{$d->mo_tpq}}</td><td>{{$d->mo_total1}}</td><td>{{$d->mo_total}}</td><td>{{$d->id_nu_control}}</td><td>{{$d->id_origenes}}</td><td>{{$d->in_usd}}</td><td>{{$d->nu_tasa}}</td><td>{{$d->in_kilos}}</td><td>{{$d->in_calculo}}</td><td>{{$d->id_login}}</td><td>{{$d->nb_login}}</td><td>{{$d->id_empresa}}</td><td>{{$d->in_contenedor}}</td><td>{{$d->in_numcontrol}}</td><td>{{$d->id_productor}}</td><td>{{$d->in_paleta}}</td><td>{{$d->nu_telefono1}}</td><td>{{$d->id_chofer}}</td><td>{{$d->id_lugar}}</td><td>{{$d->id_temporada}}</td><td>{{$d->id_broker}}</td><td>{{$d->mo_precio}}</td><td>{{$d->in_ruta_paleta}}</td><td>{{$d->in_typeb}}</td><td>{{$d->in_proteccion}}</td><td>{{$d->nu_paletes}}</td><td>{{$d->nu_boites}}</td><td>{{$d->nu_tpaletes}}</td><td>{{$d->nu_tboites}}</td><td>{{$d->nu_busqueda}}</td>
                        <td>
<a href="{{url('/Cruds/Mae_maestro/Eliminar/'.$d->id)}}"><input type='button' class='btn'  value='Eliminar'></a>
<a href="{{url('/Cruds/Mae_maestro/Modificar/'.$d->id)}}"><input type='button' class='btn'  value='Modificar' ></a>
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
