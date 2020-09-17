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
Listar MAE_DETALLE
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
/Cruds/Mae_detalle/CrearNuevo
        ')}}" >
            <button  type="button" class="btn btn-primary">Añadir</button>
        </a>

       <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
            <thead>
                 <tr>
<th>ID</th><th>IN_TIPO</th><th>NU_CONSECUTIVO</th><th>ID_GESTION_CAJA</th><th>ID_NU_CONTROL</th><th>ID_PRODUCTOS_CODIGOS</th><th>ID_ORIGENES</th><th>IN_KILOS</th><th>IN_USD</th><th>NU_TASA</th><th>MO_TOT_POINDS</th><th>MO_PKG</th><th>MO_PRECIO</th><th>MO_SUB_TOTAL</th><th>IN_CALCULO</th><th>CA_PRODUCTOS</th><th>MO_PKG_CONFIRMADO</th><th>MO_PKG_RECIBIDO</th><th>MO_RECU</th><th>MO_REJETE</th><th>ID_MOTIF</th><th>NU_LOTE</th><th>MO_PKG_RECHAZO</th>
                    <th>Operaciones</th>
                           
                </tr>
             </thead>
            @if(count($data)>=1)
                @foreach($data as $d)
                    <tr>
<td>{{$d->id}}</td><td>{{$d->in_tipo}}</td><td>{{$d->nu_consecutivo}}</td><td>{{$d->id_gestion_caja}}</td><td>{{$d->id_nu_control}}</td><td>{{$d->id_productos_codigos}}</td><td>{{$d->id_origenes}}</td><td>{{$d->in_kilos}}</td><td>{{$d->in_usd}}</td><td>{{$d->nu_tasa}}</td><td>{{$d->mo_tot_poinds}}</td><td>{{$d->mo_pkg}}</td><td>{{$d->mo_precio}}</td><td>{{$d->mo_sub_total}}</td><td>{{$d->in_calculo}}</td><td>{{$d->ca_productos}}</td><td>{{$d->mo_pkg_confirmado}}</td><td>{{$d->mo_pkg_recibido}}</td><td>{{$d->mo_recu}}</td><td>{{$d->mo_rejete}}</td><td>{{$d->id_motif}}</td><td>{{$d->nu_lote}}</td><td>{{$d->mo_pkg_rechazo}}</td>
                        <td>
<a href="{{url('/Cruds/Mae_detalle/Eliminar/'.$d->id)}}"><input type='button' class='btn'  value='Eliminar'></a>
<a href="{{url('/Cruds/Mae_detalle/Modificar/'.$d->id)}}"><input type='button' class='btn'  value='Modificar' ></a>
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
