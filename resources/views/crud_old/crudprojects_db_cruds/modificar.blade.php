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

<form action="{{url('/Cruds/Projects_db_cruds/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='id_projects_databases'>ID_PROJECTS_DATABASES</label><input type='text' class='form-control' name='id_projects_databases' value='{{$data->id_projects_databases}}' required='required' ><br><label for='id_projects'>ID_PROJECTS</label><input type='text' class='form-control' name='id_projects' value='{{$data->id_projects}}' required='required' ><br><label for='nb_cruds'>NB_CRUDS</label><input type='text' class='form-control' name='nb_cruds' value='{{$data->nb_cruds}}' required='required' ><br><label for='nb_owner'>NB_OWNER</label><input type='text' class='form-control' name='nb_owner' value='{{$data->nb_owner}}' required='required' ><br><label for='nb_tabla'>NB_TABLA</label><input type='text' class='form-control' name='nb_tabla' value='{{$data->nb_tabla}}' required='required' ><br><label for='nb_campo'>NB_CAMPO</label><input type='text' class='form-control' name='nb_campo' value='{{$data->nb_campo}}' required='required' ><br><label for='id_type_of_fields'>ID_TYPE_OF_FIELDS</label><input type='text' class='form-control' name='id_type_of_fields' value='{{$data->id_type_of_fields}}' required='required' ><br><label for='tx_tipo_de_llenado'>TX_TIPO_DE_LLENADO</label><input type='text' class='form-control' name='tx_tipo_de_llenado' value='{{$data->tx_tipo_de_llenado}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Projects_db_cruds/lista
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
