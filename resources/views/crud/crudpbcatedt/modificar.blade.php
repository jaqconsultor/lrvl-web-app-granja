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

<form action="{{url('/Cruds/Pbcatedt/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='pbe_name'>PBE_NAME</label><input type='text' class='form-control' name='pbe_name' value='{{$data->pbe_name}}' required='required' ><br><label for='pbe_edit'>PBE_EDIT</label><input type='text' class='form-control' name='pbe_edit' value='{{$data->pbe_edit}}' required='required' ><br><label for='pbe_type'>PBE_TYPE</label><input type='text' class='form-control' name='pbe_type' value='{{$data->pbe_type}}' required='required' ><br><label for='pbe_cntr'>PBE_CNTR</label><input type='text' class='form-control' name='pbe_cntr' value='{{$data->pbe_cntr}}' required='required' ><br><label for='pbe_seqn'>PBE_SEQN</label><input type='text' class='form-control' name='pbe_seqn' value='{{$data->pbe_seqn}}' required='required' ><br><label for='pbe_flag'>PBE_FLAG</label><input type='text' class='form-control' name='pbe_flag' value='{{$data->pbe_flag}}' required='required' ><br><label for='pbe_work'>PBE_WORK</label><input type='text' class='form-control' name='pbe_work' value='{{$data->pbe_work}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Pbcatedt/lista
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
