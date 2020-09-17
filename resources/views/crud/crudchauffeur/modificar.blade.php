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

<form action="{{url('/Cruds/Chauffeur/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='nb_chauffeur'>NB_CHAUFFEUR</label><input type='text' class='form-control' name='nb_chauffeur' value='{{$data->nb_chauffeur}}' required='required' ><br><label for='nb_direccion'>NB_DIRECCION</label><input type='text' class='form-control' name='nb_direccion' value='{{$data->nb_direccion}}' required='required' ><br><label for='nb_informacion'>NB_INFORMACION</label><input type='text' class='form-control' name='nb_informacion' value='{{$data->nb_informacion}}' required='required' ><br><label for='nu_tel1'>NU_TEL1</label><input type='text' class='form-control' name='nu_tel1' value='{{$data->nu_tel1}}' required='required' ><br><label for='nu_tel2'>NU_TEL2</label><input type='text' class='form-control' name='nu_tel2' value='{{$data->nu_tel2}}' required='required' ><br><label for='tx_email'>TX_EMAIL</label><input type='text' class='form-control' name='tx_email' value='{{$data->tx_email}}' required='required' ><br><label for='in_tipo'>IN_TIPO</label><input type='text' class='form-control' name='in_tipo' value='{{$data->in_tipo}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Chauffeur/lista
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
