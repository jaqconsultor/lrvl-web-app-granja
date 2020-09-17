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
/Cruds/Datos_b3_detalle/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='usuario'>USUARIO</label><input type='text' class='form-control' name='usuario' required='required' ><label for='nu_registro'>NU_REGISTRO</label><input type='text' class='form-control' name='nu_registro' required='required' ><label for='cod_aduana'>COD_ADUANA</label><input type='text' class='form-control' name='cod_aduana' required='required' ><label for='nb_productos'>NB_PRODUCTOS</label><input type='text' class='form-control' name='nb_productos' required='required' ><label for='ca_registros'>CA_REGISTROS</label><input type='text' class='form-control' name='ca_registros' required='required' ><label for='mo_suma_can'>MO_SUMA_CAN</label><input type='text' class='form-control' name='mo_suma_can' required='required' ><label for='mo_suma_usd'>MO_SUMA_USD</label><input type='text' class='form-control' name='mo_suma_usd' required='required' ><label for='nu_control'>NU_CONTROL</label><input type='text' class='form-control' name='nu_control' required='required' ><label for='tmo_tot_poinds'>TMO_TOT_POINDS</label><input type='text' class='form-control' name='tmo_tot_poinds' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Datos_b3_detalle/lista
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
