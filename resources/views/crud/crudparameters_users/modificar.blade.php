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

<form action="{{url('/Cruds/Parameters_users/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='id_projects'>ID_PROJECTS</label><input type='text' class='form-control' name='id_projects' value='{{$data->id_projects}}' required='required' ><br><label for='id_projects_modules'>ID_PROJECTS_MODULES</label><input type='text' class='form-control' name='id_projects_modules' value='{{$data->id_projects_modules}}' required='required' ><br><label for='id_projects_sections'>ID_PROJECTS_SECTIONS</label><input type='text' class='form-control' name='id_projects_sections' value='{{$data->id_projects_sections}}' required='required' ><br><label for='nb_parameter'>NB_PARAMETER</label><input type='text' class='form-control' name='nb_parameter' value='{{$data->nb_parameter}}' required='required' ><br><label for='tx_value'>TX_VALUE</label><input type='text' class='form-control' name='tx_value' value='{{$data->tx_value}}' required='required' ><br><label for='id_users'>ID_USERS</label><input type='text' class='form-control' name='id_users' value='{{$data->id_users}}' required='required' ><br><label for='tx_description'>TX_DESCRIPTION</label><input type='text' class='form-control' name='tx_description' value='{{$data->tx_description}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Parameters_users/lista
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
