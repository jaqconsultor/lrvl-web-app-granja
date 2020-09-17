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
/Cruds/Projects_databases/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='id_projects'>ID_PROJECTS</label><input type='text' class='form-control' name='id_projects' required='required' ><label for='id_projects_modules'>ID_PROJECTS_MODULES</label><input type='text' class='form-control' name='id_projects_modules' required='required' ><label for='id_projects_sections'>ID_PROJECTS_SECTIONS</label><input type='text' class='form-control' name='id_projects_sections' required='required' ><label for='nb_databases'>NB_DATABASES</label><input type='text' class='form-control' name='nb_databases' required='required' ><label for='nb_acronym'>NB_ACRONYM</label><input type='text' class='form-control' name='nb_acronym' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Projects_databases/lista
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
