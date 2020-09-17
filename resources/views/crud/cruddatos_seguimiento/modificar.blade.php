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

<form action="{{url('/Cruds/Datos_seguimiento/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='fe_registro'>FE_REGISTRO</label><input type='text' class='form-control' name='fe_registro' value='{{$data->fe_registro}}' required='required' ><br><label for='id_control'>ID_CONTROL</label><input type='text' class='form-control' name='id_control' value='{{$data->id_control}}' required='required' ><br><label for='in_estado'>IN_ESTADO</label><input type='text' class='form-control' name='in_estado' value='{{$data->in_estado}}' required='required' ><br><label for='tx_lugar'>TX_LUGAR</label><input type='text' class='form-control' name='tx_lugar' value='{{$data->tx_lugar}}' required='required' ><br><label for='tx_temperatura'>TX_TEMPERATURA</label><input type='text' class='form-control' name='tx_temperatura' value='{{$data->tx_temperatura}}' required='required' ><br><label for='in_temperatura'>IN_TEMPERATURA</label><input type='text' class='form-control' name='in_temperatura' value='{{$data->in_temperatura}}' required='required' ><br><label for='tx_nota'>TX_NOTA</label><input type='text' class='form-control' name='tx_nota' value='{{$data->tx_nota}}' required='required' ><br><label for='tx_usu_crea'>TX_USU_CREA</label><input type='text' class='form-control' name='tx_usu_crea' value='{{$data->tx_usu_crea}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Datos_seguimiento/lista
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
