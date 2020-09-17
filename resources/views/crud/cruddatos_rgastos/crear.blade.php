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
/Cruds/Datos_rgastos/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='fe_registro'>FE_REGISTRO</label><input type='text' class='form-control' name='fe_registro' required='required' ><label for='id_control'>ID_CONTROL</label><input type='text' class='form-control' name='id_control' required='required' ><label for='nu_order'>NU_ORDER</label><input type='text' class='form-control' name='nu_order' required='required' ><label for='id_rgasto_concepto'>ID_RGASTO_CONCEPTO</label><input type='text' class='form-control' name='id_rgasto_concepto' required='required' ><label for='in_suma'>IN_SUMA</label><input type='text' class='form-control' name='in_suma' required='required' ><label for='mo_gasto'>MO_GASTO</label><input type='text' class='form-control' name='mo_gasto' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Datos_rgastos/lista
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
