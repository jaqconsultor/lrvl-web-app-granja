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

<form action="{{url('/Cruds/Users_projects_descriptions/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='id_users'>ID_USERS</label><input type='text' class='form-control' name='id_users' value='{{$data->id_users}}' required='required' ><br><label for='id_projects_descriptions'>ID_PROJECTS_DESCRIPTIONS</label><input type='text' class='form-control' name='id_projects_descriptions' value='{{$data->id_projects_descriptions}}' required='required' ><br><label for='fe_vencimiento'>FE_VENCIMIENTO</label><input type='text' class='form-control' name='fe_vencimiento' value='{{$data->fe_vencimiento}}' required='required' ><br><label for='in_activerecord'>IN_ACTIVERECORD</label><input type='text' class='form-control' name='in_activerecord' value='{{$data->in_activerecord}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Users_projects_descriptions/lista
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