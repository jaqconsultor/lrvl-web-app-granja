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

<form action="{{url('/Cruds/Clients/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='nb_clients'>NB_CLIENTS</label><input type='text' class='form-control' name='nb_clients' value='{{$data->nb_clients}}' required='required' ><br><label for='in_tipo_cli'>IN_TIPO_CLI</label><input type='text' class='form-control' name='in_tipo_cli' value='{{$data->in_tipo_cli}}' required='required' ><br><label for='tx_direccion'>TX_DIRECCION</label><input type='text' class='form-control' name='tx_direccion' value='{{$data->tx_direccion}}' required='required' ><br><label for='tx_direccion1'>TX_DIRECCION1</label><input type='text' class='form-control' name='tx_direccion1' value='{{$data->tx_direccion1}}' required='required' ><br><label for='tx_direccion2'>TX_DIRECCION2</label><input type='text' class='form-control' name='tx_direccion2' value='{{$data->tx_direccion2}}' required='required' ><br><label for='tx_direccion3'>TX_DIRECCION3</label><input type='text' class='form-control' name='tx_direccion3' value='{{$data->tx_direccion3}}' required='required' ><br><label for='tx_direccion4'>TX_DIRECCION4</label><input type='text' class='form-control' name='tx_direccion4' value='{{$data->tx_direccion4}}' required='required' ><br><label for='tx_direccion5'>TX_DIRECCION5</label><input type='text' class='form-control' name='tx_direccion5' value='{{$data->tx_direccion5}}' required='required' ><br><label for='nb_contacto'>NB_CONTACTO</label><input type='text' class='form-control' name='nb_contacto' value='{{$data->nb_contacto}}' required='required' ><br><label for='nu_cod_referencia'>NU_COD_REFERENCIA</label><input type='text' class='form-control' name='nu_cod_referencia' value='{{$data->nu_cod_referencia}}' required='required' ><br><label for='nu_telefono1'>NU_TELEFONO1</label><input type='text' class='form-control' name='nu_telefono1' value='{{$data->nu_telefono1}}' required='required' ><br><label for='nu_telefono2'>NU_TELEFONO2</label><input type='text' class='form-control' name='nu_telefono2' value='{{$data->nu_telefono2}}' required='required' ><br><label for='in_transport'>IN_TRANSPORT</label><input type='text' class='form-control' name='in_transport' value='{{$data->in_transport}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Clients/lista
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
