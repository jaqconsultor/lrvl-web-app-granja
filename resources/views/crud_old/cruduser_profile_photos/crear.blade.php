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
/Cruds/User_profile_photos/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='tx_photofile'>TX_PHOTOFILE</label><input type='text' class='form-control' name='tx_photofile' required='required' ><label for='id_users'>ID_USERS</label><input type='text' class='form-control' name='id_users' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/User_profile_photos/lista
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