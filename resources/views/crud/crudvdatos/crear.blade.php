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
/Cruds/Vdatos/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='nu_control'>NU_CONTROL</label><input type='text' class='form-control' name='nu_control' required='required' ><label for='fe_factura'>FE_FACTURA</label><input type='text' class='form-control' name='fe_factura' required='required' ><label for='nu_factura'>NU_FACTURA</label><input type='text' class='form-control' name='nu_factura' required='required' ><label for='nu_comanda'>NU_COMANDA</label><input type='text' class='form-control' name='nu_comanda' required='required' ><label for='id_cliente'>ID_CLIENTE</label><input type='text' class='form-control' name='id_cliente' required='required' ><label for='nb_clients'>NB_CLIENTS</label><input type='text' class='form-control' name='nb_clients' required='required' ><label for='id_chofer'>ID_CHOFER</label><input type='text' class='form-control' name='id_chofer' required='required' ><label for='nb_chauffeur'>NB_CHAUFFEUR</label><input type='text' class='form-control' name='nb_chauffeur' required='required' ><label for='ca_pal_azul_138'>CA_PAL_AZUL_138</label><input type='text' class='form-control' name='ca_pal_azul_138' required='required' ><label for='ca_pal_amar_138'>CA_PAL_AMAR_138</label><input type='text' class='form-control' name='ca_pal_amar_138' required='required' ><label for='ca_pal_azul_116'>CA_PAL_AZUL_116</label><input type='text' class='form-control' name='ca_pal_azul_116' required='required' ><label for='ca_pal_amar_116'>CA_PAL_AMAR_116</label><input type='text' class='form-control' name='ca_pal_amar_116' required='required' ><label for='ca_tot_138'>CA_TOT_138</label><input type='text' class='form-control' name='ca_tot_138' required='required' ><label for='ca_tot_116'>CA_TOT_116</label><input type='text' class='form-control' name='ca_tot_116' required='required' ><label for='id_lugar'>ID_LUGAR</label><input type='text' class='form-control' name='id_lugar' required='required' ><label for='nb_livraison'>NB_LIVRAISON</label><input type='text' class='form-control' name='nb_livraison' required='required' ><label for='in_tipo'>IN_TIPO</label><input type='text' class='form-control' name='in_tipo' required='required' ><label for='id_camion'>ID_CAMION</label><input type='text' class='form-control' name='id_camion' required='required' ><label for='nb_camion'>NB_CAMION</label><input type='text' class='form-control' name='nb_camion' required='required' ><label for='in_ver_doc'>IN_VER_DOC</label><input type='text' class='form-control' name='in_ver_doc' required='required' ><label for='in_ref_ext'>IN_REF_EXT</label><input type='text' class='form-control' name='in_ref_ext' required='required' ><label for='in_retorno'>IN_RETORNO</label><input type='text' class='form-control' name='in_retorno' required='required' ><label for='in_impreso'>IN_IMPRESO</label><input type='text' class='form-control' name='in_impreso' required='required' ><label for='nu_requisicion'>NU_REQUISICION</label><input type='text' class='form-control' name='nu_requisicion' required='required' ><label for='fe_entrega'>FE_ENTREGA</label><input type='text' class='form-control' name='fe_entrega' required='required' ><label for='ho_entrega'>HO_ENTREGA</label><input type='text' class='form-control' name='ho_entrega' required='required' ><label for='fe_hrrdv'>FE_HRRDV</label><input type='text' class='form-control' name='fe_hrrdv' required='required' ><label for='nu_rdv'>NU_RDV</label><input type='text' class='form-control' name='nu_rdv' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Vdatos/lista
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
