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

<form action="{{url('/Cruds/Productos_modelos/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='id_linea'>ID_LINEA</label><input type='text' class='form-control' name='id_linea' value='{{$data->id_linea}}' required='required' ><br><label for='id_marca'>ID_MARCA</label><input type='text' class='form-control' name='id_marca' value='{{$data->id_marca}}' required='required' ><br><label for='id_modelo'>ID_MODELO</label><input type='text' class='form-control' name='id_modelo' value='{{$data->id_modelo}}' required='required' ><br><label for='descrip'>DESCRIP</label><input type='text' class='form-control' name='descrip' value='{{$data->descrip}}' required='required' ><br><label for='fcrea'>FCREA</label><input type='text' class='form-control' name='fcrea' value='{{$data->fcrea}}' required='required' ><br><label for='usuario'>USUARIO</label><input type='text' class='form-control' name='usuario' value='{{$data->usuario}}' required='required' ><br><label for='color_r'>COLOR_R</label><input type='text' class='form-control' name='color_r' value='{{$data->color_r}}' required='required' ><br><label for='color_g'>COLOR_G</label><input type='text' class='form-control' name='color_g' value='{{$data->color_g}}' required='required' ><br><label for='color_b'>COLOR_B</label><input type='text' class='form-control' name='color_b' value='{{$data->color_b}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Productos_modelos/lista
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
