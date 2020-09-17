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

<form action="{{url('/Cruds/Productos/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='id_producto'>ID_PRODUCTO</label><input type='text' class='form-control' name='id_producto' value='{{$data->id_producto}}' required='required' ><br><label for='id_linea'>ID_LINEA</label><input type='text' class='form-control' name='id_linea' value='{{$data->id_linea}}' required='required' ><br><label for='id_marca'>ID_MARCA</label><input type='text' class='form-control' name='id_marca' value='{{$data->id_marca}}' required='required' ><br><label for='id_modelo'>ID_MODELO</label><input type='text' class='form-control' name='id_modelo' value='{{$data->id_modelo}}' required='required' ><br><label for='descrip'>DESCRIP</label><input type='text' class='form-control' name='descrip' value='{{$data->descrip}}' required='required' ><br><label for='valorv'>VALORV</label><input type='text' class='form-control' name='valorv' value='{{$data->valorv}}' required='required' ><br><label for='valor2'>VALOR2</label><input type='text' class='form-control' name='valor2' value='{{$data->valor2}}' required='required' ><br><label for='valor3'>VALOR3</label><input type='text' class='form-control' name='valor3' value='{{$data->valor3}}' required='required' ><br><label for='existmin'>EXISTMIN</label><input type='text' class='form-control' name='existmin' value='{{$data->existmin}}' required='required' ><br><label for='existen'>EXISTEN</label><input type='text' class='form-control' name='existen' value='{{$data->existen}}' required='required' ><br><label for='ultprov'>ULTPROV</label><input type='text' class='form-control' name='ultprov' value='{{$data->ultprov}}' required='required' ><br><label for='docprov'>DOCPROV</label><input type='text' class='form-control' name='docprov' value='{{$data->docprov}}' required='required' ><br><label for='valorc'>VALORC</label><input type='text' class='form-control' name='valorc' value='{{$data->valorc}}' required='required' ><br><label for='fecultact'>FECULTACT</label><input type='text' class='form-control' name='fecultact' value='{{$data->fecultact}}' required='required' ><br><label for='fcrea'>FCREA</label><input type='text' class='form-control' name='fcrea' value='{{$data->fcrea}}' required='required' ><br><label for='usuario'>USUARIO</label><input type='text' class='form-control' name='usuario' value='{{$data->usuario}}' required='required' ><br><label for='id_tipo'>ID_TIPO</label><input type='text' class='form-control' name='id_tipo' value='{{$data->id_tipo}}' required='required' ><br><label for='cantidad'>CANTIDAD</label><input type='text' class='form-control' name='cantidad' value='{{$data->cantidad}}' required='required' ><br><label for='preciop'>PRECIOP</label><input type='text' class='form-control' name='preciop' value='{{$data->preciop}}' required='required' ><br><label for='estado'>ESTADO</label><input type='text' class='form-control' name='estado' value='{{$data->estado}}' required='required' ><br><label for='code_bar_internal'>CODE_BAR_INTERNAL</label><input type='text' class='form-control' name='code_bar_internal' value='{{$data->code_bar_internal}}' required='required' ><br><label for='code_bar_external'>CODE_BAR_EXTERNAL</label><input type='text' class='form-control' name='code_bar_external' value='{{$data->code_bar_external}}' required='required' ><br><label for='code_bar_upc'>CODE_BAR_UPC</label><input type='text' class='form-control' name='code_bar_upc' value='{{$data->code_bar_upc}}' required='required' ><br><label for='tentrega'>TENTREGA</label><input type='text' class='form-control' name='tentrega' value='{{$data->tentrega}}' required='required' ><br><label for='id_prov'>ID_PROV</label><input type='text' class='form-control' name='id_prov' value='{{$data->id_prov}}' required='required' ><br><label for='id_unidadm'>ID_UNIDADM</label><input type='text' class='form-control' name='id_unidadm' value='{{$data->id_unidadm}}' required='required' ><br><label for='cod_aduana'>COD_ADUANA</label><input type='text' class='form-control' name='cod_aduana' value='{{$data->cod_aduana}}' required='required' ><br><label for='id_producto_codigo'>ID_PRODUCTO_CODIGO</label><input type='text' class='form-control' name='id_producto_codigo' value='{{$data->id_producto_codigo}}' required='required' ><br><label for='in_gestionable'>IN_GESTIONABLE</label><input type='text' class='form-control' name='in_gestionable' value='{{$data->in_gestionable}}' required='required' ><br><label for='in_caja'>IN_CAJA</label><input type='text' class='form-control' name='in_caja' value='{{$data->in_caja}}' required='required' ><br><label for='in_twistt'>IN_TWISTT</label><input type='text' class='form-control' name='in_twistt' value='{{$data->in_twistt}}' required='required' ><br><label for='id_primaria'>ID_PRIMARIA</label><input type='text' class='form-control' name='id_primaria' value='{{$data->id_primaria}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Productos/lista
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
