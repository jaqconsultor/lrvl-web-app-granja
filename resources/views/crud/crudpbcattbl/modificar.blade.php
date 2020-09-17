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

<form action="{{url('/Cruds/Pbcattbl/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='pbt_tnam'>PBT_TNAM</label><input type='text' class='form-control' name='pbt_tnam' value='{{$data->pbt_tnam}}' required='required' ><br><label for='pbt_tid'>PBT_TID</label><input type='text' class='form-control' name='pbt_tid' value='{{$data->pbt_tid}}' required='required' ><br><label for='pbt_ownr'>PBT_OWNR</label><input type='text' class='form-control' name='pbt_ownr' value='{{$data->pbt_ownr}}' required='required' ><br><label for='pbd_fhgt'>PBD_FHGT</label><input type='text' class='form-control' name='pbd_fhgt' value='{{$data->pbd_fhgt}}' required='required' ><br><label for='pbd_fwgt'>PBD_FWGT</label><input type='text' class='form-control' name='pbd_fwgt' value='{{$data->pbd_fwgt}}' required='required' ><br><label for='pbd_fitl'>PBD_FITL</label><input type='text' class='form-control' name='pbd_fitl' value='{{$data->pbd_fitl}}' required='required' ><br><label for='pbd_funl'>PBD_FUNL</label><input type='text' class='form-control' name='pbd_funl' value='{{$data->pbd_funl}}' required='required' ><br><label for='pbd_fchr'>PBD_FCHR</label><input type='text' class='form-control' name='pbd_fchr' value='{{$data->pbd_fchr}}' required='required' ><br><label for='pbd_fptc'>PBD_FPTC</label><input type='text' class='form-control' name='pbd_fptc' value='{{$data->pbd_fptc}}' required='required' ><br><label for='pbd_ffce'>PBD_FFCE</label><input type='text' class='form-control' name='pbd_ffce' value='{{$data->pbd_ffce}}' required='required' ><br><label for='pbh_fhgt'>PBH_FHGT</label><input type='text' class='form-control' name='pbh_fhgt' value='{{$data->pbh_fhgt}}' required='required' ><br><label for='pbh_fwgt'>PBH_FWGT</label><input type='text' class='form-control' name='pbh_fwgt' value='{{$data->pbh_fwgt}}' required='required' ><br><label for='pbh_fitl'>PBH_FITL</label><input type='text' class='form-control' name='pbh_fitl' value='{{$data->pbh_fitl}}' required='required' ><br><label for='pbh_funl'>PBH_FUNL</label><input type='text' class='form-control' name='pbh_funl' value='{{$data->pbh_funl}}' required='required' ><br><label for='pbh_fchr'>PBH_FCHR</label><input type='text' class='form-control' name='pbh_fchr' value='{{$data->pbh_fchr}}' required='required' ><br><label for='pbh_fptc'>PBH_FPTC</label><input type='text' class='form-control' name='pbh_fptc' value='{{$data->pbh_fptc}}' required='required' ><br><label for='pbh_ffce'>PBH_FFCE</label><input type='text' class='form-control' name='pbh_ffce' value='{{$data->pbh_ffce}}' required='required' ><br><label for='pbl_fhgt'>PBL_FHGT</label><input type='text' class='form-control' name='pbl_fhgt' value='{{$data->pbl_fhgt}}' required='required' ><br><label for='pbl_fwgt'>PBL_FWGT</label><input type='text' class='form-control' name='pbl_fwgt' value='{{$data->pbl_fwgt}}' required='required' ><br><label for='pbl_fitl'>PBL_FITL</label><input type='text' class='form-control' name='pbl_fitl' value='{{$data->pbl_fitl}}' required='required' ><br><label for='pbl_funl'>PBL_FUNL</label><input type='text' class='form-control' name='pbl_funl' value='{{$data->pbl_funl}}' required='required' ><br><label for='pbl_fchr'>PBL_FCHR</label><input type='text' class='form-control' name='pbl_fchr' value='{{$data->pbl_fchr}}' required='required' ><br><label for='pbl_fptc'>PBL_FPTC</label><input type='text' class='form-control' name='pbl_fptc' value='{{$data->pbl_fptc}}' required='required' ><br><label for='pbl_ffce'>PBL_FFCE</label><input type='text' class='form-control' name='pbl_ffce' value='{{$data->pbl_ffce}}' required='required' ><br><label for='pbt_cmnt'>PBT_CMNT</label><input type='text' class='form-control' name='pbt_cmnt' value='{{$data->pbt_cmnt}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Pbcattbl/lista
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
