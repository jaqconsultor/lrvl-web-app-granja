@extends('template/template')

@section('site-page')
<div class="container-fluid">
    <div  class="row">
        <div class="col-xs-12 ">
            <div class="box">
             <div class="box-header">
                <div class="box-name">
                    <i class=""></i>
                    <span>Cargar  Nuevo  Complemento</span>
                </div>
                <div class="box-icons">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="expand-link">
                        <i class="fa fa-expand"></i>
                    </a>
                <!--   <a class="close-link">
                        <i class="fa fa-times"></i>
                      </a> -->

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
        
<form action="{{url('
/Cruds/Projects_descriptions/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='id_projects_modules'>ID_PROJECTS_MODULES</label><input type='text' class='form-control' name='id_projects_modules' required='required' ><label for='id_projects_sections'>ID_PROJECTS_SECTIONS</label><input type='text' class='form-control' name='id_projects_sections' required='required' ><label for='id_type_of_objs'>ID_TYPE_OF_OBJS</label><input type='text' class='form-control' name='id_type_of_objs' required='required' ><label for='id_projects'>ID_PROJECTS</label><input type='text' class='form-control' name='id_projects' required='required' ><label for='id_destination'>ID_DESTINATION</label><input type='text' class='form-control' name='id_destination' required='required' ><label for='id_type_of_destination'>ID_TYPE_OF_DESTINATION</label><input type='text' class='form-control' name='id_type_of_destination' required='required' ><label for='nu_order'>NU_ORDER</label><input type='text' class='form-control' name='nu_order' required='required' ><label for='nu_order1'>NU_ORDER1</label><input type='text' class='form-control' name='nu_order1' required='required' ><label for='nu_order2'>NU_ORDER2</label><input type='text' class='form-control' name='nu_order2' required='required' ><label for='tx_fir_option'>TX_FIR_OPTION</label><input type='text' class='form-control' name='tx_fir_option' required='required' ><label for='tx_sec_option'>TX_SEC_OPTION</label><input type='text' class='form-control' name='tx_sec_option' required='required' ><label for='tx_thi_option'>TX_THI_OPTION</label><input type='text' class='form-control' name='tx_thi_option' required='required' ><label for='tx_description'>TX_DESCRIPTION</label><input type='text' class='form-control' name='tx_description' required='required' ><label for='tx_icon'>TX_ICON</label><input type='text' class='form-control' name='tx_icon' required='required' ><label for='tx_destination'>TX_DESTINATION</label><input type='text' class='form-control' name='tx_destination' required='required' ><label for='nb_parameter'>NB_PARAMETER</label><input type='text' class='form-control' name='nb_parameter' required='required' ><label for='tx_value_parameter'>TX_VALUE_PARAMETER</label><input type='text' class='form-control' name='tx_value_parameter' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Projects_descriptions/lista
            ')}}">
            <button type="button" class="btn btn-primary">Volver</button>
            </a>
            </div>
            {{ Form::close() }}
          
         </div>
            
    </div>
        </div>
    </div>
</div>
@endsection
