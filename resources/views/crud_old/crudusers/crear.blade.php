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
/Cruds/Users/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='login'>LOGIN</label><input type='text' class='form-control' name='login' required='required' ><label for='name'>NAME</label><input type='text' class='form-control' name='name' required='required' ><label for='email'>EMAIL</label><input type='text' class='form-control' name='email' required='required' ><label for='password'>PASSWORD</label><input type='text' class='form-control' name='password' required='required' ><label for='remember_token'>REMEMBER_TOKEN</label><input type='text' class='form-control' name='remember_token' required='required' ><label for='in_verified'>IN_VERIFIED</label><input type='text' class='form-control' name='in_verified' required='required' ><label for='in_firstime'>IN_FIRSTIME</label><input type='text' class='form-control' name='in_firstime' required='required' ><label for='email_verified_at'>EMAIL_VERIFIED_AT</label><input type='text' class='form-control' name='email_verified_at' required='required' ><label for='in_activerecord'>IN_ACTIVERECORD</label><input type='text' class='form-control' name='in_activerecord' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Users/lista
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