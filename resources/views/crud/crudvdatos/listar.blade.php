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
Listar VDATOS
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
/Cruds/Vdatos/CrearNuevo
        ')}}" >
            <button  type="button" class="btn btn-primary">Añadir</button>
        </a>

       <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
            <thead>
                 <tr>
<th>NU_CONTROL</th><th>FE_FACTURA</th><th>NU_FACTURA</th><th>NU_COMANDA</th><th>ID_CLIENTE</th><th>NB_CLIENTS</th><th>ID_CHOFER</th><th>NB_CHAUFFEUR</th><th>CA_PAL_AZUL_138</th><th>CA_PAL_AMAR_138</th><th>CA_PAL_AZUL_116</th><th>CA_PAL_AMAR_116</th><th>CA_TOT_138</th><th>CA_TOT_116</th><th>ID_LUGAR</th><th>NB_LIVRAISON</th><th>IN_TIPO</th><th>ID_CAMION</th><th>NB_CAMION</th><th>IN_VER_DOC</th><th>IN_REF_EXT</th><th>IN_RETORNO</th><th>IN_IMPRESO</th><th>NU_REQUISICION</th><th>FE_ENTREGA</th><th>HO_ENTREGA</th><th>FE_HRRDV</th><th>NU_RDV</th>
                    <th>Operaciones</th>
                           
                </tr>
             </thead>
            @if(count($data)>=1)
                @foreach($data as $d)
                    <tr>
<td>{{$d->nu_control}}</td><td>{{$d->fe_factura}}</td><td>{{$d->nu_factura}}</td><td>{{$d->nu_comanda}}</td><td>{{$d->id_cliente}}</td><td>{{$d->nb_clients}}</td><td>{{$d->id_chofer}}</td><td>{{$d->nb_chauffeur}}</td><td>{{$d->ca_pal_azul_138}}</td><td>{{$d->ca_pal_amar_138}}</td><td>{{$d->ca_pal_azul_116}}</td><td>{{$d->ca_pal_amar_116}}</td><td>{{$d->ca_tot_138}}</td><td>{{$d->ca_tot_116}}</td><td>{{$d->id_lugar}}</td><td>{{$d->nb_livraison}}</td><td>{{$d->in_tipo}}</td><td>{{$d->id_camion}}</td><td>{{$d->nb_camion}}</td><td>{{$d->in_ver_doc}}</td><td>{{$d->in_ref_ext}}</td><td>{{$d->in_retorno}}</td><td>{{$d->in_impreso}}</td><td>{{$d->nu_requisicion}}</td><td>{{$d->fe_entrega}}</td><td>{{$d->ho_entrega}}</td><td>{{$d->fe_hrrdv}}</td><td>{{$d->nu_rdv}}</td>
                        <td>
<a href="{{url('/Cruds/Vdatos/Eliminar/'.$d->id)}}"><input type='button' class='btn'  value='Eliminar'></a>
<a href="{{url('/Cruds/Vdatos/Modificar/'.$d->id)}}"><input type='button' class='btn'  value='Modificar' ></a>
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
