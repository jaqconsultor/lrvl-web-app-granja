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

<form action="{{url('/Cruds/Users/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='login'>LOGIN</label><input type='text' class='form-control' name='login' value='{{$data->login}}' required='required' ><br><label for='name'>NAME</label><input type='text' class='form-control' name='name' value='{{$data->name}}' required='required' ><br><label for='email'>EMAIL</label><input type='text' class='form-control' name='email' value='{{$data->email}}' required='required' ><br><label for='password'>PASSWORD</label><input type='text' class='form-control' name='password' value='{{$data->password}}' required='required' ><br><label for='remember_token'>REMEMBER_TOKEN</label><input type='text' class='form-control' name='remember_token' value='{{$data->remember_token}}' required='required' ><br><label for='in_verified'>IN_VERIFIED</label><input type='text' class='form-control' name='in_verified' value='{{$data->in_verified}}' required='required' ><br><label for='in_firstime'>IN_FIRSTIME</label><input type='text' class='form-control' name='in_firstime' value='{{$data->in_firstime}}' required='required' ><br><label for='email_verified_at'>EMAIL_VERIFIED_AT</label><input type='text' class='form-control' name='email_verified_at' value='{{$data->email_verified_at}}' required='required' ><br><label for='in_activerecord'>IN_ACTIVERECORD</label><input type='text' class='form-control' name='in_activerecord' value='{{$data->in_activerecord}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Users/lista
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
