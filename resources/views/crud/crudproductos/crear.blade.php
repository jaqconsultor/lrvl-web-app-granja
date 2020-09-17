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
/Cruds/Productos/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='id_producto'>ID_PRODUCTO</label><input type='text' class='form-control' name='id_producto' required='required' ><label for='id_linea'>ID_LINEA</label><input type='text' class='form-control' name='id_linea' required='required' ><label for='id_marca'>ID_MARCA</label><input type='text' class='form-control' name='id_marca' required='required' ><label for='id_modelo'>ID_MODELO</label><input type='text' class='form-control' name='id_modelo' required='required' ><label for='descrip'>DESCRIP</label><input type='text' class='form-control' name='descrip' required='required' ><label for='valorv'>VALORV</label><input type='text' class='form-control' name='valorv' required='required' ><label for='valor2'>VALOR2</label><input type='text' class='form-control' name='valor2' required='required' ><label for='valor3'>VALOR3</label><input type='text' class='form-control' name='valor3' required='required' ><label for='existmin'>EXISTMIN</label><input type='text' class='form-control' name='existmin' required='required' ><label for='existen'>EXISTEN</label><input type='text' class='form-control' name='existen' required='required' ><label for='ultprov'>ULTPROV</label><input type='text' class='form-control' name='ultprov' required='required' ><label for='docprov'>DOCPROV</label><input type='text' class='form-control' name='docprov' required='required' ><label for='valorc'>VALORC</label><input type='text' class='form-control' name='valorc' required='required' ><label for='fecultact'>FECULTACT</label><input type='text' class='form-control' name='fecultact' required='required' ><label for='fcrea'>FCREA</label><input type='text' class='form-control' name='fcrea' required='required' ><label for='usuario'>USUARIO</label><input type='text' class='form-control' name='usuario' required='required' ><label for='id_tipo'>ID_TIPO</label><input type='text' class='form-control' name='id_tipo' required='required' ><label for='cantidad'>CANTIDAD</label><input type='text' class='form-control' name='cantidad' required='required' ><label for='preciop'>PRECIOP</label><input type='text' class='form-control' name='preciop' required='required' ><label for='estado'>ESTADO</label><input type='text' class='form-control' name='estado' required='required' ><label for='code_bar_internal'>CODE_BAR_INTERNAL</label><input type='text' class='form-control' name='code_bar_internal' required='required' ><label for='code_bar_external'>CODE_BAR_EXTERNAL</label><input type='text' class='form-control' name='code_bar_external' required='required' ><label for='code_bar_upc'>CODE_BAR_UPC</label><input type='text' class='form-control' name='code_bar_upc' required='required' ><label for='tentrega'>TENTREGA</label><input type='text' class='form-control' name='tentrega' required='required' ><label for='id_prov'>ID_PROV</label><input type='text' class='form-control' name='id_prov' required='required' ><label for='id_unidadm'>ID_UNIDADM</label><input type='text' class='form-control' name='id_unidadm' required='required' ><label for='cod_aduana'>COD_ADUANA</label><input type='text' class='form-control' name='cod_aduana' required='required' ><label for='id_producto_codigo'>ID_PRODUCTO_CODIGO</label><input type='text' class='form-control' name='id_producto_codigo' required='required' ><label for='in_gestionable'>IN_GESTIONABLE</label><input type='text' class='form-control' name='in_gestionable' required='required' ><label for='in_caja'>IN_CAJA</label><input type='text' class='form-control' name='in_caja' required='required' ><label for='in_twistt'>IN_TWISTT</label><input type='text' class='form-control' name='in_twistt' required='required' ><label for='id_primaria'>ID_PRIMARIA</label><input type='text' class='form-control' name='id_primaria' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Productos/lista
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
