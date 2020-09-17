@extends('template/template')

@section('site-page')
<div class="container-fluid">
    <div  class="row">
        <div class="col-xs-12 ">
            <div class="box">
             <div class="box-header">
                <div class="box-name">
                    <i class=""></i>
                    <span>Cargar  Nuevo  Complemento</span>
                </div>
                <div class="box-icons">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="expand-link">
                        <i class="fa fa-expand"></i>
                    </a>
                <!--   <a class="close-link">
                        <i class="fa fa-times"></i>
                      </a> -->

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
        
<form action="{{url('
/Cruds/Gestion_cajas/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='nb_gestion_cajas'>NB_GESTION_CAJAS</label><input type='text' class='form-control' name='nb_gestion_cajas' required='required' ><label for='in_activo'>IN_ACTIVO</label><input type='text' class='form-control' name='in_activo' required='required' ><label for='tx_talla_caja'>TX_TALLA_CAJA</label><input type='text' class='form-control' name='tx_talla_caja' required='required' ><label for='nu_piezas_caja'>NU_PIEZAS_CAJA</label><input type='text' class='form-control' name='nu_piezas_caja' required='required' ><label for='ca_peso_cajas'>CA_PESO_CAJAS</label><input type='text' class='form-control' name='ca_peso_cajas' required='required' ><label for='ca_peso_min'>CA_PESO_MIN</label><input type='text' class='form-control' name='ca_peso_min' required='required' ><label for='ca_peso_max'>CA_PESO_MAX</label><input type='text' class='form-control' name='ca_peso_max' required='required' ><label for='in_peso'>IN_PESO</label><input type='text' class='form-control' name='in_peso' required='required' ><label for='ca_kilos_caja'>CA_KILOS_CAJA</label><input type='text' class='form-control' name='ca_kilos_caja' required='required' ><label for='nu_caja_etage'>NU_CAJA_ETAGE</label><input type='text' class='form-control' name='nu_caja_etage' required='required' ><label for='nu_caja_palete'>NU_CAJA_PALETE</label><input type='text' class='form-control' name='nu_caja_palete' required='required' ><label for='ca_long_bouquet'>CA_LONG_BOUQUET</label><input type='text' class='form-control' name='ca_long_bouquet' required='required' ><label for='in_orientacion_bouquet'>IN_ORIENTACION_BOUQUET</label><input type='text' class='form-control' name='in_orientacion_bouquet' required='required' ><label for='in_glace'>IN_GLACE</label><input type='text' class='form-control' name='in_glace' required='required' ><label for='in_glace_haut'>IN_GLACE_HAUT</label><input type='text' class='form-control' name='in_glace_haut' required='required' ><label for='in_glace_bas'>IN_GLACE_BAS</label><input type='text' class='form-control' name='in_glace_bas' required='required' ><label for='in_glace_centre'>IN_GLACE_CENTRE</label><input type='text' class='form-control' name='in_glace_centre' required='required' ><label for='in_glace_fond'>IN_GLACE_FOND</label><input type='text' class='form-control' name='in_glace_fond' required='required' ><label for='ca_kilos_caja1'>CA_KILOS_CAJA1</label><input type='text' class='form-control' name='ca_kilos_caja1' required='required' ><label for='in_autre'>IN_AUTRE</label><input type='text' class='form-control' name='in_autre' required='required' ><label for='in_autre_haut'>IN_AUTRE_HAUT</label><input type='text' class='form-control' name='in_autre_haut' required='required' ><label for='in_autre_bas'>IN_AUTRE_BAS</label><input type='text' class='form-control' name='in_autre_bas' required='required' ><label for='in_autre_centre'>IN_AUTRE_CENTRE</label><input type='text' class='form-control' name='in_autre_centre' required='required' ><label for='ca_total_poids'>CA_TOTAL_POIDS</label><input type='text' class='form-control' name='ca_total_poids' required='required' ><label for='id_producto'>ID_PRODUCTO</label><input type='text' class='form-control' name='id_producto' required='required' ><label for='in_prod_caja'>IN_PROD_CAJA</label><input type='text' class='form-control' name='in_prod_caja' required='required' ><label for='id_prod_twistt'>ID_PROD_TWISTT</label><input type='text' class='form-control' name='id_prod_twistt' required='required' ><label for='mo_precio'>MO_PRECIO</label><input type='text' class='form-control' name='mo_precio' required='required' ><label for='tx_espanol'>TX_ESPANOL</label><input type='text' class='form-control' name='tx_espanol' required='required' ><label for='fe_registro'>FE_REGISTRO</label><input type='text' class='form-control' name='fe_registro' required='required' ><label for='fe_ult_act'>FE_ULT_ACT</label><input type='text' class='form-control' name='fe_ult_act' required='required' ><label for='in_unite'>IN_UNITE</label><input type='text' class='form-control' name='in_unite' required='required' ><label for='tx_nota'>TX_NOTA</label><input type='text' class='form-control' name='tx_nota' required='required' ><label for='mo_precio_prix'>MO_PRECIO_PRIX</label><input type='text' class='form-control' name='mo_precio_prix' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Gestion_cajas/lista
            ')}}">
            <button type="button" class="btn btn-primary">Volver</button>
            </a>
            </div>
            {{ Form::close() }}
          
         </div>
            
    </div>
        </div>
    </div>
</div>
@endsection
