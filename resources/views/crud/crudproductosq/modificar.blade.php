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

<form action="{{url('/Cruds/Productosq/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='codigoprd'>CODIGOPRD</label><input type='text' class='form-control' name='codigoprd' value='{{$data->codigoprd}}' required='required' ><br><label for='nombreprd'>NOMBREPRD</label><input type='text' class='form-control' name='nombreprd' value='{{$data->nombreprd}}' required='required' ><br><label for='memo'>MEMO</label><input type='text' class='form-control' name='memo' value='{{$data->memo}}' required='required' ><br><label for='memo2'>MEMO2</label><input type='text' class='form-control' name='memo2' value='{{$data->memo2}}' required='required' ><br><label for='co_solicitud'>CO_SOLICITUD</label><input type='text' class='form-control' name='co_solicitud' value='{{$data->co_solicitud}}' required='required' ><br><label for='co_aprobado'>CO_APROBADO</label><input type='text' class='form-control' name='co_aprobado' value='{{$data->co_aprobado}}' required='required' ><br><label for='fecha_aprobado'>FECHA_APROBADO</label><input type='text' class='form-control' name='fecha_aprobado' value='{{$data->fecha_aprobado}}' required='required' ><br><label for='id_mit'>ID_MIT</label><input type='text' class='form-control' name='id_mit' value='{{$data->id_mit}}' required='required' ><br><label for='id_origen'>ID_ORIGEN</label><input type='text' class='form-control' name='id_origen' value='{{$data->id_origen}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Productosq/lista
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
