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
/Cruds/Productosq/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='codigoprd'>CODIGOPRD</label><input type='text' class='form-control' name='codigoprd' required='required' ><label for='nombreprd'>NOMBREPRD</label><input type='text' class='form-control' name='nombreprd' required='required' ><label for='memo'>MEMO</label><input type='text' class='form-control' name='memo' required='required' ><label for='memo2'>MEMO2</label><input type='text' class='form-control' name='memo2' required='required' ><label for='co_solicitud'>CO_SOLICITUD</label><input type='text' class='form-control' name='co_solicitud' required='required' ><label for='co_aprobado'>CO_APROBADO</label><input type='text' class='form-control' name='co_aprobado' required='required' ><label for='fecha_aprobado'>FECHA_APROBADO</label><input type='text' class='form-control' name='fecha_aprobado' required='required' ><label for='id_mit'>ID_MIT</label><input type='text' class='form-control' name='id_mit' required='required' ><label for='id_origen'>ID_ORIGEN</label><input type='text' class='form-control' name='id_origen' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Productosq/lista
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
