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

<form action="{{url('/Cruds/Projects_descriptions/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='id_projects_modules'>ID_PROJECTS_MODULES</label><input type='text' class='form-control' name='id_projects_modules' value='{{$data->id_projects_modules}}' required='required' ><br><label for='id_projects_sections'>ID_PROJECTS_SECTIONS</label><input type='text' class='form-control' name='id_projects_sections' value='{{$data->id_projects_sections}}' required='required' ><br><label for='id_type_of_objs'>ID_TYPE_OF_OBJS</label><input type='text' class='form-control' name='id_type_of_objs' value='{{$data->id_type_of_objs}}' required='required' ><br><label for='id_projects'>ID_PROJECTS</label><input type='text' class='form-control' name='id_projects' value='{{$data->id_projects}}' required='required' ><br><label for='id_destination'>ID_DESTINATION</label><input type='text' class='form-control' name='id_destination' value='{{$data->id_destination}}' required='required' ><br><label for='id_type_of_destination'>ID_TYPE_OF_DESTINATION</label><input type='text' class='form-control' name='id_type_of_destination' value='{{$data->id_type_of_destination}}' required='required' ><br><label for='nu_order'>NU_ORDER</label><input type='text' class='form-control' name='nu_order' value='{{$data->nu_order}}' required='required' ><br><label for='nu_order1'>NU_ORDER1</label><input type='text' class='form-control' name='nu_order1' value='{{$data->nu_order1}}' required='required' ><br><label for='nu_order2'>NU_ORDER2</label><input type='text' class='form-control' name='nu_order2' value='{{$data->nu_order2}}' required='required' ><br><label for='tx_fir_option'>TX_FIR_OPTION</label><input type='text' class='form-control' name='tx_fir_option' value='{{$data->tx_fir_option}}' required='required' ><br><label for='tx_sec_option'>TX_SEC_OPTION</label><input type='text' class='form-control' name='tx_sec_option' value='{{$data->tx_sec_option}}' required='required' ><br><label for='tx_thi_option'>TX_THI_OPTION</label><input type='text' class='form-control' name='tx_thi_option' value='{{$data->tx_thi_option}}' required='required' ><br><label for='tx_description'>TX_DESCRIPTION</label><input type='text' class='form-control' name='tx_description' value='{{$data->tx_description}}' required='required' ><br><label for='tx_icon'>TX_ICON</label><input type='text' class='form-control' name='tx_icon' value='{{$data->tx_icon}}' required='required' ><br><label for='tx_destination'>TX_DESTINATION</label><input type='text' class='form-control' name='tx_destination' value='{{$data->tx_destination}}' required='required' ><br><label for='nb_parameter'>NB_PARAMETER</label><input type='text' class='form-control' name='nb_parameter' value='{{$data->nb_parameter}}' required='required' ><br><label for='tx_value_parameter'>TX_VALUE_PARAMETER</label><input type='text' class='form-control' name='tx_value_parameter' value='{{$data->tx_value_parameter}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Projects_descriptions/lista
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
