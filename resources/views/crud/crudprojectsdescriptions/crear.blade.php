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
/Cruds/Projectsdescriptions/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='id_module'>ID_MODULE</label><input type='text' class='form-control' name='id_module' required='required' ><label for='id_typeofobjs'>ID_TYPEOFOBJS</label><input type='text' class='form-control' name='id_typeofobjs' required='required' ><label for='nu_order'>NU_ORDER</label><input type='text' class='form-control' name='nu_order' required='required' ><label for='id_destination'>ID_DESTINATION</label><input type='text' class='form-control' name='id_destination' required='required' ><label for='tx_fir_option'>TX_FIR_OPTION</label><input type='text' class='form-control' name='tx_fir_option' required='required' ><label for='tx_sec_option'>TX_SEC_OPTION</label><input type='text' class='form-control' name='tx_sec_option' required='required' ><label for='tx_thi_option'>TX_THI_OPTION</label><input type='text' class='form-control' name='tx_thi_option' required='required' ><label for='tx_description'>TX_DESCRIPTION</label><input type='text' class='form-control' name='tx_description' required='required' ><label for='tx_icon'>TX_ICON</label><input type='text' class='form-control' name='tx_icon' required='required' ><label for='tx_destination'>TX_DESTINATION</label><input type='text' class='form-control' name='tx_destination' required='required' ><label for='nu_order2'>NU_ORDER2</label><input type='text' class='form-control' name='nu_order2' required='required' ><label for='nu_order3'>NU_ORDER3</label><input type='text' class='form-control' name='nu_order3' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Projectsdescriptions/lista
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
