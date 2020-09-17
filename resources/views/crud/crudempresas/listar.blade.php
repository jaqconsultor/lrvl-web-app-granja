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
Listar EMPRESAS
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
/Cruds/Empresas/CrearNuevo
        ')}}" >
            <button  type="button" class="btn btn-primary">Añadir</button>
        </a>

       <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
            <thead>
                 <tr>
<th>ID</th><th>NB_EMPRESA</th><th>NO_IMPORTED</th><th>NO_DOUANIERE</th><th>MEMBERSHIP</th><th>TPS</th><th>TX_2DIRECCION</th><th>TX_2DIRECCION1</th><th>TX_2DIRECCION2</th><th>TX_2DIRECCION3</th><th>TX_2DIRECCION4</th><th>TX_2DIRECCION5</th><th>TX_DIRECCION</th><th>TX_DIRECCION1</th><th>TX_DIRECCION2</th><th>TX_DIRECCION3</th><th>TX_DIRECCION4</th><th>TX_DIRECCION5</th><th>TX_LOGO</th>
                    <th>Operaciones</th>
                           
                </tr>
             </thead>
            @if(count($data)>=1)
                @foreach($data as $d)
                    <tr>
<td>{{$d->id}}</td><td>{{$d->nb_empresa}}</td><td>{{$d->no_imported}}</td><td>{{$d->no_douaniere}}</td><td>{{$d->membership}}</td><td>{{$d->tps}}</td><td>{{$d->tx_2direccion}}</td><td>{{$d->tx_2direccion1}}</td><td>{{$d->tx_2direccion2}}</td><td>{{$d->tx_2direccion3}}</td><td>{{$d->tx_2direccion4}}</td><td>{{$d->tx_2direccion5}}</td><td>{{$d->tx_direccion}}</td><td>{{$d->tx_direccion1}}</td><td>{{$d->tx_direccion2}}</td><td>{{$d->tx_direccion3}}</td><td>{{$d->tx_direccion4}}</td><td>{{$d->tx_direccion5}}</td><td>{{$d->tx_logo}}</td>
                        <td>
<a href="{{url('/Cruds/Empresas/Eliminar/'.$d->id)}}"><input type='button' class='btn'  value='Eliminar'></a>
<a href="{{url('/Cruds/Empresas/Modificar/'.$d->id)}}"><input type='button' class='btn'  value='Modificar' ></a>
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
