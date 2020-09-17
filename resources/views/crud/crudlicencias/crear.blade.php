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
/Cruds/Licencias/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='id_empresa'>ID_EMPRESA</label><input type='text' class='form-control' name='id_empresa' required='required' ><label for='fe_facture'>FE_FACTURE</label><input type='text' class='form-control' name='fe_facture' required='required' ><label for='nu_facture'>NU_FACTURE</label><input type='text' class='form-control' name='nu_facture' required='required' ><label for='tx_licencia'>TX_LICENCIA</label><input type='text' class='form-control' name='tx_licencia' required='required' ><label for='tx_code_licencia'>TX_CODE_LICENCIA</label><input type='text' class='form-control' name='tx_code_licencia' required='required' ><label for='in_estado'>IN_ESTADO</label><input type='text' class='form-control' name='in_estado' required='required' ><label for='nu_autorizacion'>NU_AUTORIZACION</label><input type='text' class='form-control' name='nu_autorizacion' required='required' ><label for='fe_inicio'>FE_INICIO</label><input type='text' class='form-control' name='fe_inicio' required='required' ><label for='fe_final'>FE_FINAL</label><input type='text' class='form-control' name='fe_final' required='required' ><label for='in_abono'>IN_ABONO</label><input type='text' class='form-control' name='in_abono' required='required' ><label for='in_seleccion'>IN_SELECCION</label><input type='text' class='form-control' name='in_seleccion' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Licencias/lista
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
