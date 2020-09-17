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
Listar PBCATCOL
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
/Cruds/Pbcatcol/CrearNuevo
        ')}}" >
            <button  type="button" class="btn btn-primary">Añadir</button>
        </a>

       <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
            <thead>
                 <tr>
<th>PBC_TNAM</th><th>PBC_TID</th><th>PBC_OWNR</th><th>PBC_CNAM</th><th>PBC_CID</th><th>PBC_LABL</th><th>PBC_LPOS</th><th>PBC_HDR</th><th>PBC_HPOS</th><th>PBC_JTFY</th><th>PBC_MASK</th><th>PBC_CASE</th><th>PBC_HGHT</th><th>PBC_WDTH</th><th>PBC_PTRN</th><th>PBC_BMAP</th><th>PBC_INIT</th><th>PBC_CMNT</th><th>PBC_EDIT</th><th>PBC_TAG</th>
                    <th>Operaciones</th>
                           
                </tr>
             </thead>
            @if(count($data)>=1)
                @foreach($data as $d)
                    <tr>
<td>{{$d->pbc_tnam}}</td><td>{{$d->pbc_tid}}</td><td>{{$d->pbc_ownr}}</td><td>{{$d->pbc_cnam}}</td><td>{{$d->pbc_cid}}</td><td>{{$d->pbc_labl}}</td><td>{{$d->pbc_lpos}}</td><td>{{$d->pbc_hdr}}</td><td>{{$d->pbc_hpos}}</td><td>{{$d->pbc_jtfy}}</td><td>{{$d->pbc_mask}}</td><td>{{$d->pbc_case}}</td><td>{{$d->pbc_hght}}</td><td>{{$d->pbc_wdth}}</td><td>{{$d->pbc_ptrn}}</td><td>{{$d->pbc_bmap}}</td><td>{{$d->pbc_init}}</td><td>{{$d->pbc_cmnt}}</td><td>{{$d->pbc_edit}}</td><td>{{$d->pbc_tag}}</td>
                        <td>
<a href="{{url('/Cruds/Pbcatcol/Eliminar/'.$d->id)}}"><input type='button' class='btn'  value='Eliminar'></a>
<a href="{{url('/Cruds/Pbcatcol/Modificar/'.$d->id)}}"><input type='button' class='btn'  value='Modificar' ></a>
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
