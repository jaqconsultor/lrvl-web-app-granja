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
Listar PROJECTS_DESCRIPTIONS
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
/Cruds/Projects_descriptions/CrearNuevo
        ')}}" >
            <button  type="button" class="btn btn-primary">Añadir</button>
        </a>

       <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
            <thead>
                 <tr>
<th>ID</th><th>ID_PROJECTS_MODULES</th><th>ID_PROJECTS_SECTIONS</th><th>ID_TYPE_OF_OBJS</th><th>ID_PROJECTS</th><th>ID_DESTINATION</th><th>ID_TYPE_OF_DESTINATION</th><th>NU_ORDER</th><th>NU_ORDER1</th><th>NU_ORDER2</th><th>TX_FIR_OPTION</th><th>TX_SEC_OPTION</th><th>TX_THI_OPTION</th><th>TX_DESCRIPTION</th><th>TX_ICON</th><th>TX_DESTINATION</th><th>NB_PARAMETER</th><th>TX_VALUE_PARAMETER</th>
                    <th>Operaciones</th>
                           
                </tr>
             </thead>
            @if(count($data)>=1)
                @foreach($data as $d)
                    <tr>
<td>{{$d->id}}</td><td>{{$d->id_projects_modules}}</td><td>{{$d->id_projects_sections}}</td><td>{{$d->id_type_of_objs}}</td><td>{{$d->id_projects}}</td><td>{{$d->id_destination}}</td><td>{{$d->id_type_of_destination}}</td><td>{{$d->nu_order}}</td><td>{{$d->nu_order1}}</td><td>{{$d->nu_order2}}</td><td>{{$d->tx_fir_option}}</td><td>{{$d->tx_sec_option}}</td><td>{{$d->tx_thi_option}}</td><td>{{$d->tx_description}}</td><td>{{$d->tx_icon}}</td><td>{{$d->tx_destination}}</td><td>{{$d->nb_parameter}}</td><td>{{$d->tx_value_parameter}}</td>
                        <td>
<a href="{{url('/Cruds/Projects_descriptions/Eliminar/'.$d->id)}}"><input type='button' class='btn'  value='Eliminar'></a>
<a href="{{url('/Cruds/Projects_descriptions/Modificar/'.$d->id)}}"><input type='button' class='btn'  value='Modificar' ></a>
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
