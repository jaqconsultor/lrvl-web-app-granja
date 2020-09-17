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

<form action="{{url('/Cruds/Datos_notas/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='fe_registro'>FE_REGISTRO</label><input type='text' class='form-control' name='fe_registro' value='{{$data->fe_registro}}' required='required' ><br><label for='id_control'>ID_CONTROL</label><input type='text' class='form-control' name='id_control' value='{{$data->id_control}}' required='required' ><br><label for='tx_nota'>TX_NOTA</label><input type='text' class='form-control' name='tx_nota' value='{{$data->tx_nota}}' required='required' ><br><label for='tx_usu_crea'>TX_USU_CREA</label><input type='text' class='form-control' name='tx_usu_crea' value='{{$data->tx_usu_crea}}' required='required' ><br><label for='tx_usu_ver'>TX_USU_VER</label><input type='text' class='form-control' name='tx_usu_ver' value='{{$data->tx_usu_ver}}' required='required' ><br><label for='in_leido'>IN_LEIDO</label><input type='text' class='form-control' name='in_leido' value='{{$data->in_leido}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Datos_notas/lista
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
