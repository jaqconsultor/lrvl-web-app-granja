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
/Cruds/Livraison/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='nb_livraison'>NB_LIVRAISON</label><input type='text' class='form-control' name='nb_livraison' required='required' ><label for='in_tipo'>IN_TIPO</label><input type='text' class='form-control' name='in_tipo' required='required' ><label for='color_r'>COLOR_R</label><input type='text' class='form-control' name='color_r' required='required' ><label for='color_g'>COLOR_G</label><input type='text' class='form-control' name='color_g' required='required' ><label for='color_b'>COLOR_B</label><input type='text' class='form-control' name='color_b' required='required' ><label for='mo_taux'>MO_TAUX</label><input type='text' class='form-control' name='mo_taux' required='required' ><label for='in_aereolinea'>IN_AEREOLINEA</label><input type='text' class='form-control' name='in_aereolinea' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Livraison/lista
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
