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
Listar GESTION_CAJAS
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
/Cruds/Gestion_cajas/CrearNuevo
        ')}}" >
            <button  type="button" class="btn btn-primary">Añadir</button>
        </a>

       <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
            <thead>
                 <tr>
<th>ID</th><th>NB_GESTION_CAJAS</th><th>IN_ACTIVO</th><th>TX_TALLA_CAJA</th><th>NU_PIEZAS_CAJA</th><th>CA_PESO_CAJAS</th><th>CA_PESO_MIN</th><th>CA_PESO_MAX</th><th>IN_PESO</th><th>CA_KILOS_CAJA</th><th>NU_CAJA_ETAGE</th><th>NU_CAJA_PALETE</th><th>CA_LONG_BOUQUET</th><th>IN_ORIENTACION_BOUQUET</th><th>IN_GLACE</th><th>IN_GLACE_HAUT</th><th>IN_GLACE_BAS</th><th>IN_GLACE_CENTRE</th><th>IN_GLACE_FOND</th><th>CA_KILOS_CAJA1</th><th>IN_AUTRE</th><th>IN_AUTRE_HAUT</th><th>IN_AUTRE_BAS</th><th>IN_AUTRE_CENTRE</th><th>CA_TOTAL_POIDS</th><th>ID_PRODUCTO</th><th>IN_PROD_CAJA</th><th>ID_PROD_TWISTT</th><th>MO_PRECIO</th><th>TX_ESPANOL</th><th>FE_REGISTRO</th><th>FE_ULT_ACT</th><th>IN_UNITE</th><th>TX_NOTA</th><th>MO_PRECIO_PRIX</th>
                    <th>Operaciones</th>
                           
                </tr>
             </thead>
            @if(count($data)>=1)
                @foreach($data as $d)
                    <tr>
<td>{{$d->id}}</td><td>{{$d->nb_gestion_cajas}}</td><td>{{$d->in_activo}}</td><td>{{$d->tx_talla_caja}}</td><td>{{$d->nu_piezas_caja}}</td><td>{{$d->ca_peso_cajas}}</td><td>{{$d->ca_peso_min}}</td><td>{{$d->ca_peso_max}}</td><td>{{$d->in_peso}}</td><td>{{$d->ca_kilos_caja}}</td><td>{{$d->nu_caja_etage}}</td><td>{{$d->nu_caja_palete}}</td><td>{{$d->ca_long_bouquet}}</td><td>{{$d->in_orientacion_bouquet}}</td><td>{{$d->in_glace}}</td><td>{{$d->in_glace_haut}}</td><td>{{$d->in_glace_bas}}</td><td>{{$d->in_glace_centre}}</td><td>{{$d->in_glace_fond}}</td><td>{{$d->ca_kilos_caja1}}</td><td>{{$d->in_autre}}</td><td>{{$d->in_autre_haut}}</td><td>{{$d->in_autre_bas}}</td><td>{{$d->in_autre_centre}}</td><td>{{$d->ca_total_poids}}</td><td>{{$d->id_producto}}</td><td>{{$d->in_prod_caja}}</td><td>{{$d->id_prod_twistt}}</td><td>{{$d->mo_precio}}</td><td>{{$d->tx_espanol}}</td><td>{{$d->fe_registro}}</td><td>{{$d->fe_ult_act}}</td><td>{{$d->in_unite}}</td><td>{{$d->tx_nota}}</td><td>{{$d->mo_precio_prix}}</td>
                        <td>
<a href="{{url('/Cruds/Gestion_cajas/Eliminar/'.$d->id)}}"><input type='button' class='btn'  value='Eliminar'></a>
<a href="{{url('/Cruds/Gestion_cajas/Modificar/'.$d->id)}}"><input type='button' class='btn'  value='Modificar' ></a>
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
