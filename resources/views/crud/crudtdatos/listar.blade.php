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
Listar TDATOS
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
/Cruds/Tdatos/CrearNuevo
        ')}}" >
            <button  type="button" class="btn btn-primary">Añadir</button>
        </a>

       <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
            <thead>
                 <tr>
<th>CONTROL</th><th>FECHA</th><th>FACTURA</th><th>COMANDE</th><th>CLIENTE</th><th>CHOFER</th><th>PAL_AZUL_138</th><th>PAL_AMARI_138</th><th>PAL_AZUL_116</th><th>PAL_AMARI_116</th><th>TOT_138</th><th>TOT_116</th><th>LUGAR</th><th>CAMION</th><th>VER_DOC</th><th>REF_EXT</th><th>RETORNO</th>
                    <th>Operaciones</th>
                           
                </tr>
             </thead>
            @if(count($data)>=1)
                @foreach($data as $d)
                    <tr>
<td>{{$d->control}}</td><td>{{$d->fecha}}</td><td>{{$d->factura}}</td><td>{{$d->comande}}</td><td>{{$d->cliente}}</td><td>{{$d->chofer}}</td><td>{{$d->pal_azul_138}}</td><td>{{$d->pal_amari_138}}</td><td>{{$d->pal_azul_116}}</td><td>{{$d->pal_amari_116}}</td><td>{{$d->tot_138}}</td><td>{{$d->tot_116}}</td><td>{{$d->lugar}}</td><td>{{$d->camion}}</td><td>{{$d->ver_doc}}</td><td>{{$d->ref_ext}}</td><td>{{$d->retorno}}</td>
                        <td>
<a href="{{url('/Cruds/Tdatos/Eliminar/'.$d->id)}}"><input type='button' class='btn'  value='Eliminar'></a>
<a href="{{url('/Cruds/Tdatos/Modificar/'.$d->id)}}"><input type='button' class='btn'  value='Modificar' ></a>
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
