@extends('template/template')

@section('site-page')
    <div class="container">
    <br/>
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
        @elseif(session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif
    
        
</div>

<div class="container-fluid">
    <div  class="row">
        <div class="col-xs-12 ">
            <div class="box">
             <div class="box-header">
                <div class="box-name">
                    <i class=""></i>
                    <span>Modificar</span>
                </div>
                <div class="box-icons">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="expand-link">
                        <i class="fa fa-expand"></i>
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

<form action="{{url('/Cruds/Vdatos/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='nu_control'>NU_CONTROL</label><input type='text' class='form-control' name='nu_control' value='{{$data->nu_control}}' required='required' ><br><label for='fe_factura'>FE_FACTURA</label><input type='text' class='form-control' name='fe_factura' value='{{$data->fe_factura}}' required='required' ><br><label for='nu_factura'>NU_FACTURA</label><input type='text' class='form-control' name='nu_factura' value='{{$data->nu_factura}}' required='required' ><br><label for='nu_comanda'>NU_COMANDA</label><input type='text' class='form-control' name='nu_comanda' value='{{$data->nu_comanda}}' required='required' ><br><label for='id_cliente'>ID_CLIENTE</label><input type='text' class='form-control' name='id_cliente' value='{{$data->id_cliente}}' required='required' ><br><label for='nb_clients'>NB_CLIENTS</label><input type='text' class='form-control' name='nb_clients' value='{{$data->nb_clients}}' required='required' ><br><label for='id_chofer'>ID_CHOFER</label><input type='text' class='form-control' name='id_chofer' value='{{$data->id_chofer}}' required='required' ><br><label for='nb_chauffeur'>NB_CHAUFFEUR</label><input type='text' class='form-control' name='nb_chauffeur' value='{{$data->nb_chauffeur}}' required='required' ><br><label for='ca_pal_azul_138'>CA_PAL_AZUL_138</label><input type='text' class='form-control' name='ca_pal_azul_138' value='{{$data->ca_pal_azul_138}}' required='required' ><br><label for='ca_pal_amar_138'>CA_PAL_AMAR_138</label><input type='text' class='form-control' name='ca_pal_amar_138' value='{{$data->ca_pal_amar_138}}' required='required' ><br><label for='ca_pal_azul_116'>CA_PAL_AZUL_116</label><input type='text' class='form-control' name='ca_pal_azul_116' value='{{$data->ca_pal_azul_116}}' required='required' ><br><label for='ca_pal_amar_116'>CA_PAL_AMAR_116</label><input type='text' class='form-control' name='ca_pal_amar_116' value='{{$data->ca_pal_amar_116}}' required='required' ><br><label for='ca_tot_138'>CA_TOT_138</label><input type='text' class='form-control' name='ca_tot_138' value='{{$data->ca_tot_138}}' required='required' ><br><label for='ca_tot_116'>CA_TOT_116</label><input type='text' class='form-control' name='ca_tot_116' value='{{$data->ca_tot_116}}' required='required' ><br><label for='id_lugar'>ID_LUGAR</label><input type='text' class='form-control' name='id_lugar' value='{{$data->id_lugar}}' required='required' ><br><label for='nb_livraison'>NB_LIVRAISON</label><input type='text' class='form-control' name='nb_livraison' value='{{$data->nb_livraison}}' required='required' ><br><label for='in_tipo'>IN_TIPO</label><input type='text' class='form-control' name='in_tipo' value='{{$data->in_tipo}}' required='required' ><br><label for='id_camion'>ID_CAMION</label><input type='text' class='form-control' name='id_camion' value='{{$data->id_camion}}' required='required' ><br><label for='nb_camion'>NB_CAMION</label><input type='text' class='form-control' name='nb_camion' value='{{$data->nb_camion}}' required='required' ><br><label for='in_ver_doc'>IN_VER_DOC</label><input type='text' class='form-control' name='in_ver_doc' value='{{$data->in_ver_doc}}' required='required' ><br><label for='in_ref_ext'>IN_REF_EXT</label><input type='text' class='form-control' name='in_ref_ext' value='{{$data->in_ref_ext}}' required='required' ><br><label for='in_retorno'>IN_RETORNO</label><input type='text' class='form-control' name='in_retorno' value='{{$data->in_retorno}}' required='required' ><br><label for='in_impreso'>IN_IMPRESO</label><input type='text' class='form-control' name='in_impreso' value='{{$data->in_impreso}}' required='required' ><br><label for='nu_requisicion'>NU_REQUISICION</label><input type='text' class='form-control' name='nu_requisicion' value='{{$data->nu_requisicion}}' required='required' ><br><label for='fe_entrega'>FE_ENTREGA</label><input type='text' class='form-control' name='fe_entrega' value='{{$data->fe_entrega}}' required='required' ><br><label for='ho_entrega'>HO_ENTREGA</label><input type='text' class='form-control' name='ho_entrega' value='{{$data->ho_entrega}}' required='required' ><br><label for='fe_hrrdv'>FE_HRRDV</label><input type='text' class='form-control' name='fe_hrrdv' value='{{$data->fe_hrrdv}}' required='required' ><br><label for='nu_rdv'>NU_RDV</label><input type='text' class='form-control' name='nu_rdv' value='{{$data->nu_rdv}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Vdatos/lista
               ')}}">
               <button type="button" class="btn btn-primary">Volver</button>
               </a>
              </div>
           </form>
                    
         </div>
            
        </div>
        </div>
    </div>
</div>

            
@endsection
@section('javascript-code')


@endsection
