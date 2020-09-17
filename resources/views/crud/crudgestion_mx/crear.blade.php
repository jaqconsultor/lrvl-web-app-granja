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
/Cruds/Gestion_mx/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='nu_fact'>NU_FACT</label><input type='text' class='form-control' name='nu_fact' required='required' ><label for='fe_factura'>FE_FACTURA</label><input type='text' class='form-control' name='fe_factura' required='required' ><label for='nu_cant'>NU_CANT</label><input type='text' class='form-control' name='nu_cant' required='required' ><label for='id_producto_caja'>ID_PRODUCTO_CAJA</label><input type='text' class='form-control' name='id_producto_caja' required='required' ><label for='id_proveedor'>ID_PROVEEDOR</label><input type='text' class='form-control' name='id_proveedor' required='required' ><label for='id_productor'>ID_PRODUCTOR</label><input type='text' class='form-control' name='id_productor' required='required' ><label for='mo_precio'>MO_PRECIO</label><input type='text' class='form-control' name='mo_precio' required='required' ><label for='mo_sub_total'>MO_SUB_TOTAL</label><input type='text' class='form-control' name='mo_sub_total' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Gestion_mx/lista
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
