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
Listar LICENCIAS
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
/Cruds/Licencias/CrearNuevo
        ')}}" >
            <button  type="button" class="btn btn-primary">Añadir</button>
        </a>

       <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
            <thead>
                 <tr>
<th>ID</th><th>ID_EMPRESA</th><th>FE_FACTURE</th><th>NU_FACTURE</th><th>TX_LICENCIA</th><th>TX_CODE_LICENCIA</th><th>IN_ESTADO</th><th>NU_AUTORIZACION</th><th>FE_INICIO</th><th>FE_FINAL</th><th>IN_ABONO</th><th>IN_SELECCION</th>
                    <th>Operaciones</th>
                           
                </tr>
             </thead>
            @if(count($data)>=1)
                @foreach($data as $d)
                    <tr>
<td>{{$d->id}}</td><td>{{$d->id_empresa}}</td><td>{{$d->fe_facture}}</td><td>{{$d->nu_facture}}</td><td>{{$d->tx_licencia}}</td><td>{{$d->tx_code_licencia}}</td><td>{{$d->in_estado}}</td><td>{{$d->nu_autorizacion}}</td><td>{{$d->fe_inicio}}</td><td>{{$d->fe_final}}</td><td>{{$d->in_abono}}</td><td>{{$d->in_seleccion}}</td>
                        <td>
<a href="{{url('/Cruds/Licencias/Eliminar/'.$d->id)}}"><input type='button' class='btn'  value='Eliminar'></a>
<a href="{{url('/Cruds/Licencias/Modificar/'.$d->id)}}"><input type='button' class='btn'  value='Modificar' ></a>
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
