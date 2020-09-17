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

<form action="{{url('/Cruds/Gestion_mx/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='nu_fact'>NU_FACT</label><input type='text' class='form-control' name='nu_fact' value='{{$data->nu_fact}}' required='required' ><br><label for='fe_factura'>FE_FACTURA</label><input type='text' class='form-control' name='fe_factura' value='{{$data->fe_factura}}' required='required' ><br><label for='nu_cant'>NU_CANT</label><input type='text' class='form-control' name='nu_cant' value='{{$data->nu_cant}}' required='required' ><br><label for='id_producto_caja'>ID_PRODUCTO_CAJA</label><input type='text' class='form-control' name='id_producto_caja' value='{{$data->id_producto_caja}}' required='required' ><br><label for='id_proveedor'>ID_PROVEEDOR</label><input type='text' class='form-control' name='id_proveedor' value='{{$data->id_proveedor}}' required='required' ><br><label for='id_productor'>ID_PRODUCTOR</label><input type='text' class='form-control' name='id_productor' value='{{$data->id_productor}}' required='required' ><br><label for='mo_precio'>MO_PRECIO</label><input type='text' class='form-control' name='mo_precio' value='{{$data->mo_precio}}' required='required' ><br><label for='mo_sub_total'>MO_SUB_TOTAL</label><input type='text' class='form-control' name='mo_sub_total' value='{{$data->mo_sub_total}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Gestion_mx/lista
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
