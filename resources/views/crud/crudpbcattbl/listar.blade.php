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
Listar PBCATTBL
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
/Cruds/Pbcattbl/CrearNuevo
        ')}}" >
            <button  type="button" class="btn btn-primary">Añadir</button>
        </a>

       <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
            <thead>
                 <tr>
<th>PBT_TNAM</th><th>PBT_TID</th><th>PBT_OWNR</th><th>PBD_FHGT</th><th>PBD_FWGT</th><th>PBD_FITL</th><th>PBD_FUNL</th><th>PBD_FCHR</th><th>PBD_FPTC</th><th>PBD_FFCE</th><th>PBH_FHGT</th><th>PBH_FWGT</th><th>PBH_FITL</th><th>PBH_FUNL</th><th>PBH_FCHR</th><th>PBH_FPTC</th><th>PBH_FFCE</th><th>PBL_FHGT</th><th>PBL_FWGT</th><th>PBL_FITL</th><th>PBL_FUNL</th><th>PBL_FCHR</th><th>PBL_FPTC</th><th>PBL_FFCE</th><th>PBT_CMNT</th>
                    <th>Operaciones</th>
                           
                </tr>
             </thead>
            @if(count($data)>=1)
                @foreach($data as $d)
                    <tr>
<td>{{$d->pbt_tnam}}</td><td>{{$d->pbt_tid}}</td><td>{{$d->pbt_ownr}}</td><td>{{$d->pbd_fhgt}}</td><td>{{$d->pbd_fwgt}}</td><td>{{$d->pbd_fitl}}</td><td>{{$d->pbd_funl}}</td><td>{{$d->pbd_fchr}}</td><td>{{$d->pbd_fptc}}</td><td>{{$d->pbd_ffce}}</td><td>{{$d->pbh_fhgt}}</td><td>{{$d->pbh_fwgt}}</td><td>{{$d->pbh_fitl}}</td><td>{{$d->pbh_funl}}</td><td>{{$d->pbh_fchr}}</td><td>{{$d->pbh_fptc}}</td><td>{{$d->pbh_ffce}}</td><td>{{$d->pbl_fhgt}}</td><td>{{$d->pbl_fwgt}}</td><td>{{$d->pbl_fitl}}</td><td>{{$d->pbl_funl}}</td><td>{{$d->pbl_fchr}}</td><td>{{$d->pbl_fptc}}</td><td>{{$d->pbl_ffce}}</td><td>{{$d->pbt_cmnt}}</td>
                        <td>
<a href="{{url('/Cruds/Pbcattbl/Eliminar/'.$d->id)}}"><input type='button' class='btn'  value='Eliminar'></a>
<a href="{{url('/Cruds/Pbcattbl/Modificar/'.$d->id)}}"><input type='button' class='btn'  value='Modificar' ></a>
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
