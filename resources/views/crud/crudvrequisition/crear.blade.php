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
/Cruds/Vrequisition/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='nu_control'>NU_CONTROL</label><input type='text' class='form-control' name='nu_control' required='required' ><label for='fe_factura'>FE_FACTURA</label><input type='text' class='form-control' name='fe_factura' required='required' ><label for='nb_chauffeur'>NB_CHAUFFEUR</label><input type='text' class='form-control' name='nb_chauffeur' required='required' ><label for='nb_direccion'>NB_DIRECCION</label><input type='text' class='form-control' name='nb_direccion' required='required' ><label for='nb_informacion'>NB_INFORMACION</label><input type='text' class='form-control' name='nb_informacion' required='required' ><label for='nu_tel1'>NU_TEL1</label><input type='text' class='form-control' name='nu_tel1' required='required' ><label for='tx_email'>TX_EMAIL</label><input type='text' class='form-control' name='tx_email' required='required' ><label for='nu_factura'>NU_FACTURA</label><input type='text' class='form-control' name='nu_factura' required='required' ><label for='in_ref_ext'>IN_REF_EXT</label><input type='text' class='form-control' name='in_ref_ext' required='required' ><label for='ca_tot_116'>CA_TOT_116</label><input type='text' class='form-control' name='ca_tot_116' required='required' ><label for='ca_tot_138'>CA_TOT_138</label><input type='text' class='form-control' name='ca_tot_138' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Vrequisition/lista
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
