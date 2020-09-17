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

<form action="{{url('/Cruds/Licencias/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='id_empresa'>ID_EMPRESA</label><input type='text' class='form-control' name='id_empresa' value='{{$data->id_empresa}}' required='required' ><br><label for='fe_facture'>FE_FACTURE</label><input type='text' class='form-control' name='fe_facture' value='{{$data->fe_facture}}' required='required' ><br><label for='nu_facture'>NU_FACTURE</label><input type='text' class='form-control' name='nu_facture' value='{{$data->nu_facture}}' required='required' ><br><label for='tx_licencia'>TX_LICENCIA</label><input type='text' class='form-control' name='tx_licencia' value='{{$data->tx_licencia}}' required='required' ><br><label for='tx_code_licencia'>TX_CODE_LICENCIA</label><input type='text' class='form-control' name='tx_code_licencia' value='{{$data->tx_code_licencia}}' required='required' ><br><label for='in_estado'>IN_ESTADO</label><input type='text' class='form-control' name='in_estado' value='{{$data->in_estado}}' required='required' ><br><label for='nu_autorizacion'>NU_AUTORIZACION</label><input type='text' class='form-control' name='nu_autorizacion' value='{{$data->nu_autorizacion}}' required='required' ><br><label for='fe_inicio'>FE_INICIO</label><input type='text' class='form-control' name='fe_inicio' value='{{$data->fe_inicio}}' required='required' ><br><label for='fe_final'>FE_FINAL</label><input type='text' class='form-control' name='fe_final' value='{{$data->fe_final}}' required='required' ><br><label for='in_abono'>IN_ABONO</label><input type='text' class='form-control' name='in_abono' value='{{$data->in_abono}}' required='required' ><br><label for='in_seleccion'>IN_SELECCION</label><input type='text' class='form-control' name='in_seleccion' value='{{$data->in_seleccion}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Licencias/lista
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
