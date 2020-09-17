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
/Cruds/Pbcattbl/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='pbt_tnam'>PBT_TNAM</label><input type='text' class='form-control' name='pbt_tnam' required='required' ><label for='pbt_tid'>PBT_TID</label><input type='text' class='form-control' name='pbt_tid' required='required' ><label for='pbt_ownr'>PBT_OWNR</label><input type='text' class='form-control' name='pbt_ownr' required='required' ><label for='pbd_fhgt'>PBD_FHGT</label><input type='text' class='form-control' name='pbd_fhgt' required='required' ><label for='pbd_fwgt'>PBD_FWGT</label><input type='text' class='form-control' name='pbd_fwgt' required='required' ><label for='pbd_fitl'>PBD_FITL</label><input type='text' class='form-control' name='pbd_fitl' required='required' ><label for='pbd_funl'>PBD_FUNL</label><input type='text' class='form-control' name='pbd_funl' required='required' ><label for='pbd_fchr'>PBD_FCHR</label><input type='text' class='form-control' name='pbd_fchr' required='required' ><label for='pbd_fptc'>PBD_FPTC</label><input type='text' class='form-control' name='pbd_fptc' required='required' ><label for='pbd_ffce'>PBD_FFCE</label><input type='text' class='form-control' name='pbd_ffce' required='required' ><label for='pbh_fhgt'>PBH_FHGT</label><input type='text' class='form-control' name='pbh_fhgt' required='required' ><label for='pbh_fwgt'>PBH_FWGT</label><input type='text' class='form-control' name='pbh_fwgt' required='required' ><label for='pbh_fitl'>PBH_FITL</label><input type='text' class='form-control' name='pbh_fitl' required='required' ><label for='pbh_funl'>PBH_FUNL</label><input type='text' class='form-control' name='pbh_funl' required='required' ><label for='pbh_fchr'>PBH_FCHR</label><input type='text' class='form-control' name='pbh_fchr' required='required' ><label for='pbh_fptc'>PBH_FPTC</label><input type='text' class='form-control' name='pbh_fptc' required='required' ><label for='pbh_ffce'>PBH_FFCE</label><input type='text' class='form-control' name='pbh_ffce' required='required' ><label for='pbl_fhgt'>PBL_FHGT</label><input type='text' class='form-control' name='pbl_fhgt' required='required' ><label for='pbl_fwgt'>PBL_FWGT</label><input type='text' class='form-control' name='pbl_fwgt' required='required' ><label for='pbl_fitl'>PBL_FITL</label><input type='text' class='form-control' name='pbl_fitl' required='required' ><label for='pbl_funl'>PBL_FUNL</label><input type='text' class='form-control' name='pbl_funl' required='required' ><label for='pbl_fchr'>PBL_FCHR</label><input type='text' class='form-control' name='pbl_fchr' required='required' ><label for='pbl_fptc'>PBL_FPTC</label><input type='text' class='form-control' name='pbl_fptc' required='required' ><label for='pbl_ffce'>PBL_FFCE</label><input type='text' class='form-control' name='pbl_ffce' required='required' ><label for='pbt_cmnt'>PBT_CMNT</label><input type='text' class='form-control' name='pbt_cmnt' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Pbcattbl/lista
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
