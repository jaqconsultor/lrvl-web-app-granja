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

<form action="{{url('/Cruds/Usuarios/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='login'>LOGIN</label><input type='text' class='form-control' name='login' value='{{$data->login}}' required='required' ><br><label for='nomusuario'>NOMUSUARIO</label><input type='text' class='form-control' name='nomusuario' value='{{$data->nomusuario}}' required='required' ><br><label for='claveusuario'>CLAVEUSUARIO</label><input type='text' class='form-control' name='claveusuario' value='{{$data->claveusuario}}' required='required' ><br><label for='condusuario'>CONDUSUARIO</label><input type='text' class='form-control' name='condusuario' value='{{$data->condusuario}}' required='required' ><br><label for='nuevo'>NUEVO</label><input type='text' class='form-control' name='nuevo' value='{{$data->nuevo}}' required='required' ><br><label for='activo'>ACTIVO</label><input type='text' class='form-control' name='activo' value='{{$data->activo}}' required='required' ><br><label for='in_licencia'>IN_LICENCIA</label><input type='text' class='form-control' name='in_licencia' value='{{$data->in_licencia}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Usuarios/lista
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
