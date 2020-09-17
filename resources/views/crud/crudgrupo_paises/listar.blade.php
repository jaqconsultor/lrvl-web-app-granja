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
Listar GRUPO_PAISES
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
/Cruds/Grupo_paises/CrearNuevo
        ')}}" >
            <button  type="button" class="btn btn-primary">Añadir</button>
        </a>

       <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
            <thead>
                 <tr>
<th>CO_GRUPO</th><th>NB_GRUPO</th><th>CO_PAIS</th>
                    <th>Operaciones</th>
                           
                </tr>
             </thead>
            @if(count($data)>=1)
                @foreach($data as $d)
                    <tr>
<td>{{$d->co_grupo}}</td><td>{{$d->nb_grupo}}</td><td>{{$d->co_pais}}</td>
                        <td>
<a href="{{url('/Cruds/Grupo_paises/Eliminar/'.$d->id)}}"><input type='button' class='btn'  value='Eliminar'></a>
<a href="{{url('/Cruds/Grupo_paises/Modificar/'.$d->id)}}"><input type='button' class='btn'  value='Modificar' ></a>
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
