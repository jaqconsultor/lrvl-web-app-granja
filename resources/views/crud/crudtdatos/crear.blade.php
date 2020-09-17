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
/Cruds/Tdatos/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='control'>CONTROL</label><input type='text' class='form-control' name='control' required='required' ><label for='fecha'>FECHA</label><input type='text' class='form-control' name='fecha' required='required' ><label for='factura'>FACTURA</label><input type='text' class='form-control' name='factura' required='required' ><label for='comande'>COMANDE</label><input type='text' class='form-control' name='comande' required='required' ><label for='cliente'>CLIENTE</label><input type='text' class='form-control' name='cliente' required='required' ><label for='chofer'>CHOFER</label><input type='text' class='form-control' name='chofer' required='required' ><label for='pal_azul_138'>PAL_AZUL_138</label><input type='text' class='form-control' name='pal_azul_138' required='required' ><label for='pal_amari_138'>PAL_AMARI_138</label><input type='text' class='form-control' name='pal_amari_138' required='required' ><label for='pal_azul_116'>PAL_AZUL_116</label><input type='text' class='form-control' name='pal_azul_116' required='required' ><label for='pal_amari_116'>PAL_AMARI_116</label><input type='text' class='form-control' name='pal_amari_116' required='required' ><label for='tot_138'>TOT_138</label><input type='text' class='form-control' name='tot_138' required='required' ><label for='tot_116'>TOT_116</label><input type='text' class='form-control' name='tot_116' required='required' ><label for='lugar'>LUGAR</label><input type='text' class='form-control' name='lugar' required='required' ><label for='camion'>CAMION</label><input type='text' class='form-control' name='camion' required='required' ><label for='ver_doc'>VER_DOC</label><input type='text' class='form-control' name='ver_doc' required='required' ><label for='ref_ext'>REF_EXT</label><input type='text' class='form-control' name='ref_ext' required='required' ><label for='retorno'>RETORNO</label><input type='text' class='form-control' name='retorno' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Tdatos/lista
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
