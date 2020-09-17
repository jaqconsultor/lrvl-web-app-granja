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
/Cruds/Requisicion/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='fe_requisicion'>FE_REQUISICION</label><input type='text' class='form-control' name='fe_requisicion' required='required' ><label for='id_chofer'>ID_CHOFER</label><input type='text' class='form-control' name='id_chofer' required='required' ><label for='in_estatus'>IN_ESTATUS</label><input type='text' class='form-control' name='in_estatus' required='required' ><label for='in_impreso'>IN_IMPRESO</label><input type='text' class='form-control' name='in_impreso' required='required' ><label for='in_retard'>IN_RETARD</label><input type='text' class='form-control' name='in_retard' required='required' ><label for='in_pret'>IN_PRET</label><input type='text' class='form-control' name='in_pret' required='required' ><label for='fe_date_pre'>FE_DATE_PRE</label><input type='text' class='form-control' name='fe_date_pre' required='required' ><label for='id_pre_req'>ID_PRE_REQ</label><input type='text' class='form-control' name='id_pre_req' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Requisicion/lista
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
