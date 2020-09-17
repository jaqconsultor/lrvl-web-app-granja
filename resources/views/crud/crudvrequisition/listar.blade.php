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
Listar VREQUISITION
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
/Cruds/Vrequisition/CrearNuevo
        ')}}" >
            <button  type="button" class="btn btn-primary">Añadir</button>
        </a>

       <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
            <thead>
                 <tr>
<th>NU_CONTROL</th><th>FE_FACTURA</th><th>NB_CHAUFFEUR</th><th>NB_DIRECCION</th><th>NB_INFORMACION</th><th>NU_TEL1</th><th>TX_EMAIL</th><th>NU_FACTURA</th><th>IN_REF_EXT</th><th>CA_TOT_116</th><th>CA_TOT_138</th>
                    <th>Operaciones</th>
                           
                </tr>
             </thead>
            @if(count($data)>=1)
                @foreach($data as $d)
                    <tr>
<td>{{$d->nu_control}}</td><td>{{$d->fe_factura}}</td><td>{{$d->nb_chauffeur}}</td><td>{{$d->nb_direccion}}</td><td>{{$d->nb_informacion}}</td><td>{{$d->nu_tel1}}</td><td>{{$d->tx_email}}</td><td>{{$d->nu_factura}}</td><td>{{$d->in_ref_ext}}</td><td>{{$d->ca_tot_116}}</td><td>{{$d->ca_tot_138}}</td>
                        <td>
<a href="{{url('/Cruds/Vrequisition/Eliminar/'.$d->id)}}"><input type='button' class='btn'  value='Eliminar'></a>
<a href="{{url('/Cruds/Vrequisition/Modificar/'.$d->id)}}"><input type='button' class='btn'  value='Modificar' ></a>
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
