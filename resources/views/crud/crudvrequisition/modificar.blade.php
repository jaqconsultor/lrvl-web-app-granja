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

<form action="{{url('/Cruds/Vrequisition/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='nu_control'>NU_CONTROL</label><input type='text' class='form-control' name='nu_control' value='{{$data->nu_control}}' required='required' ><br><label for='fe_factura'>FE_FACTURA</label><input type='text' class='form-control' name='fe_factura' value='{{$data->fe_factura}}' required='required' ><br><label for='nb_chauffeur'>NB_CHAUFFEUR</label><input type='text' class='form-control' name='nb_chauffeur' value='{{$data->nb_chauffeur}}' required='required' ><br><label for='nb_direccion'>NB_DIRECCION</label><input type='text' class='form-control' name='nb_direccion' value='{{$data->nb_direccion}}' required='required' ><br><label for='nb_informacion'>NB_INFORMACION</label><input type='text' class='form-control' name='nb_informacion' value='{{$data->nb_informacion}}' required='required' ><br><label for='nu_tel1'>NU_TEL1</label><input type='text' class='form-control' name='nu_tel1' value='{{$data->nu_tel1}}' required='required' ><br><label for='tx_email'>TX_EMAIL</label><input type='text' class='form-control' name='tx_email' value='{{$data->tx_email}}' required='required' ><br><label for='nu_factura'>NU_FACTURA</label><input type='text' class='form-control' name='nu_factura' value='{{$data->nu_factura}}' required='required' ><br><label for='in_ref_ext'>IN_REF_EXT</label><input type='text' class='form-control' name='in_ref_ext' value='{{$data->in_ref_ext}}' required='required' ><br><label for='ca_tot_116'>CA_TOT_116</label><input type='text' class='form-control' name='ca_tot_116' value='{{$data->ca_tot_116}}' required='required' ><br><label for='ca_tot_138'>CA_TOT_138</label><input type='text' class='form-control' name='ca_tot_138' value='{{$data->ca_tot_138}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Vrequisition/lista
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
