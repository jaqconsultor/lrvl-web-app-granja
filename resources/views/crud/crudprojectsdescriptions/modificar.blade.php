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

<form action="{{url('/Cruds/Projectsdescriptions/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='id_module'>ID_MODULE</label><input type='text' class='form-control' name='id_module' value='{{$data->id_module}}' required='required' ><br><label for='id_typeofobjs'>ID_TYPEOFOBJS</label><input type='text' class='form-control' name='id_typeofobjs' value='{{$data->id_typeofobjs}}' required='required' ><br><label for='nu_order'>NU_ORDER</label><input type='text' class='form-control' name='nu_order' value='{{$data->nu_order}}' required='required' ><br><label for='id_destination'>ID_DESTINATION</label><input type='text' class='form-control' name='id_destination' value='{{$data->id_destination}}' required='required' ><br><label for='tx_fir_option'>TX_FIR_OPTION</label><input type='text' class='form-control' name='tx_fir_option' value='{{$data->tx_fir_option}}' required='required' ><br><label for='tx_sec_option'>TX_SEC_OPTION</label><input type='text' class='form-control' name='tx_sec_option' value='{{$data->tx_sec_option}}' required='required' ><br><label for='tx_thi_option'>TX_THI_OPTION</label><input type='text' class='form-control' name='tx_thi_option' value='{{$data->tx_thi_option}}' required='required' ><br><label for='tx_description'>TX_DESCRIPTION</label><input type='text' class='form-control' name='tx_description' value='{{$data->tx_description}}' required='required' ><br><label for='tx_icon'>TX_ICON</label><input type='text' class='form-control' name='tx_icon' value='{{$data->tx_icon}}' required='required' ><br><label for='tx_destination'>TX_DESTINATION</label><input type='text' class='form-control' name='tx_destination' value='{{$data->tx_destination}}' required='required' ><br><label for='nu_order2'>NU_ORDER2</label><input type='text' class='form-control' name='nu_order2' value='{{$data->nu_order2}}' required='required' ><br><label for='nu_order3'>NU_ORDER3</label><input type='text' class='form-control' name='nu_order3' value='{{$data->nu_order3}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Projectsdescriptions/lista
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
