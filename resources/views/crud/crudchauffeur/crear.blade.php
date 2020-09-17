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
/Cruds/Chauffeur/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='nb_chauffeur'>NB_CHAUFFEUR</label><input type='text' class='form-control' name='nb_chauffeur' required='required' ><label for='nb_direccion'>NB_DIRECCION</label><input type='text' class='form-control' name='nb_direccion' required='required' ><label for='nb_informacion'>NB_INFORMACION</label><input type='text' class='form-control' name='nb_informacion' required='required' ><label for='nu_tel1'>NU_TEL1</label><input type='text' class='form-control' name='nu_tel1' required='required' ><label for='nu_tel2'>NU_TEL2</label><input type='text' class='form-control' name='nu_tel2' required='required' ><label for='tx_email'>TX_EMAIL</label><input type='text' class='form-control' name='tx_email' required='required' ><label for='in_tipo'>IN_TIPO</label><input type='text' class='form-control' name='in_tipo' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Chauffeur/lista
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