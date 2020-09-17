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
/Cruds/Productos_marcas/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='id_linea'>ID_LINEA</label><input type='text' class='form-control' name='id_linea' required='required' ><label for='id_marca'>ID_MARCA</label><input type='text' class='form-control' name='id_marca' required='required' ><label for='descrip'>DESCRIP</label><input type='text' class='form-control' name='descrip' required='required' ><label for='fcrea'>FCREA</label><input type='text' class='form-control' name='fcrea' required='required' ><label for='usuario'>USUARIO</label><input type='text' class='form-control' name='usuario' required='required' ><label for='color_r'>COLOR_R</label><input type='text' class='form-control' name='color_r' required='required' ><label for='color_g'>COLOR_G</label><input type='text' class='form-control' name='color_g' required='required' ><label for='color_b'>COLOR_B</label><input type='text' class='form-control' name='color_b' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Productos_marcas/lista
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
