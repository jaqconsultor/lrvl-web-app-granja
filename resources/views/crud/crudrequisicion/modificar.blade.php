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

<form action="{{url('/Cruds/Requisicion/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='fe_requisicion'>FE_REQUISICION</label><input type='text' class='form-control' name='fe_requisicion' value='{{$data->fe_requisicion}}' required='required' ><br><label for='id_chofer'>ID_CHOFER</label><input type='text' class='form-control' name='id_chofer' value='{{$data->id_chofer}}' required='required' ><br><label for='in_estatus'>IN_ESTATUS</label><input type='text' class='form-control' name='in_estatus' value='{{$data->in_estatus}}' required='required' ><br><label for='in_impreso'>IN_IMPRESO</label><input type='text' class='form-control' name='in_impreso' value='{{$data->in_impreso}}' required='required' ><br><label for='in_retard'>IN_RETARD</label><input type='text' class='form-control' name='in_retard' value='{{$data->in_retard}}' required='required' ><br><label for='in_pret'>IN_PRET</label><input type='text' class='form-control' name='in_pret' value='{{$data->in_pret}}' required='required' ><br><label for='fe_date_pre'>FE_DATE_PRE</label><input type='text' class='form-control' name='fe_date_pre' value='{{$data->fe_date_pre}}' required='required' ><br><label for='id_pre_req'>ID_PRE_REQ</label><input type='text' class='form-control' name='id_pre_req' value='{{$data->id_pre_req}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Requisicion/lista
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
