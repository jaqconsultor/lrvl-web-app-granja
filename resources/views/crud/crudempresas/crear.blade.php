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
/Cruds/Empresas/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='nb_empresa'>NB_EMPRESA</label><input type='text' class='form-control' name='nb_empresa' required='required' ><label for='no_imported'>NO_IMPORTED</label><input type='text' class='form-control' name='no_imported' required='required' ><label for='no_douaniere'>NO_DOUANIERE</label><input type='text' class='form-control' name='no_douaniere' required='required' ><label for='membership'>MEMBERSHIP</label><input type='text' class='form-control' name='membership' required='required' ><label for='tps'>TPS</label><input type='text' class='form-control' name='tps' required='required' ><label for='tx_2direccion'>TX_2DIRECCION</label><input type='text' class='form-control' name='tx_2direccion' required='required' ><label for='tx_2direccion1'>TX_2DIRECCION1</label><input type='text' class='form-control' name='tx_2direccion1' required='required' ><label for='tx_2direccion2'>TX_2DIRECCION2</label><input type='text' class='form-control' name='tx_2direccion2' required='required' ><label for='tx_2direccion3'>TX_2DIRECCION3</label><input type='text' class='form-control' name='tx_2direccion3' required='required' ><label for='tx_2direccion4'>TX_2DIRECCION4</label><input type='text' class='form-control' name='tx_2direccion4' required='required' ><label for='tx_2direccion5'>TX_2DIRECCION5</label><input type='text' class='form-control' name='tx_2direccion5' required='required' ><label for='tx_direccion'>TX_DIRECCION</label><input type='text' class='form-control' name='tx_direccion' required='required' ><label for='tx_direccion1'>TX_DIRECCION1</label><input type='text' class='form-control' name='tx_direccion1' required='required' ><label for='tx_direccion2'>TX_DIRECCION2</label><input type='text' class='form-control' name='tx_direccion2' required='required' ><label for='tx_direccion3'>TX_DIRECCION3</label><input type='text' class='form-control' name='tx_direccion3' required='required' ><label for='tx_direccion4'>TX_DIRECCION4</label><input type='text' class='form-control' name='tx_direccion4' required='required' ><label for='tx_direccion5'>TX_DIRECCION5</label><input type='text' class='form-control' name='tx_direccion5' required='required' ><label for='tx_logo'>TX_LOGO</label><input type='text' class='form-control' name='tx_logo' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Empresas/lista
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
