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

<form action="{{url('/Cruds/Motif/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='nb_motif'>NB_MOTIF</label><input type='text' class='form-control' name='nb_motif' value='{{$data->nb_motif}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Motif/lista
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
