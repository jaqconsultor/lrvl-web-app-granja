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
/Cruds/Datos_cos/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='id_nu_control'>ID_NU_CONTROL</label><input type='text' class='form-control' name='id_nu_control' required='required' ><label for='id_productos_codigos'>ID_PRODUCTOS_CODIGOS</label><input type='text' class='form-control' name='id_productos_codigos' required='required' ><label for='id_origenes'>ID_ORIGENES</label><input type='text' class='form-control' name='id_origenes' required='required' ><label for='in_kilos'>IN_KILOS</label><input type='text' class='form-control' name='in_kilos' required='required' ><label for='in_usd'>IN_USD</label><input type='text' class='form-control' name='in_usd' required='required' ><label for='nu_tasa'>NU_TASA</label><input type='text' class='form-control' name='nu_tasa' required='required' ><label for='mo_tot_poinds'>MO_TOT_POINDS</label><input type='text' class='form-control' name='mo_tot_poinds' required='required' ><label for='mo_pkg'>MO_PKG</label><input type='text' class='form-control' name='mo_pkg' required='required' ><label for='mo_precio'>MO_PRECIO</label><input type='text' class='form-control' name='mo_precio' required='required' ><label for='mo_sub_total'>MO_SUB_TOTAL</label><input type='text' class='form-control' name='mo_sub_total' required='required' ><label for='in_calculo'>IN_CALCULO</label><input type='text' class='form-control' name='in_calculo' required='required' ><label for='id_prod_twistt'>ID_PROD_TWISTT</label><input type='text' class='form-control' name='id_prod_twistt' required='required' ><label for='id_prod_boite'>ID_PROD_BOITE</label><input type='text' class='form-control' name='id_prod_boite' required='required' ><label for='nu_facteur'>NU_FACTEUR</label><input type='text' class='form-control' name='nu_facteur' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Datos_cos/lista
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
