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
/Cruds/Pbcatcol/GuardarNuevo
')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <!--<label for="cod">Codigo:</label>-->
                <!-- <input type="number" required class="form-control" name="cod" >; -->
<label for='pbc_tnam'>PBC_TNAM</label><input type='text' class='form-control' name='pbc_tnam' required='required' ><label for='pbc_tid'>PBC_TID</label><input type='text' class='form-control' name='pbc_tid' required='required' ><label for='pbc_ownr'>PBC_OWNR</label><input type='text' class='form-control' name='pbc_ownr' required='required' ><label for='pbc_cnam'>PBC_CNAM</label><input type='text' class='form-control' name='pbc_cnam' required='required' ><label for='pbc_cid'>PBC_CID</label><input type='text' class='form-control' name='pbc_cid' required='required' ><label for='pbc_labl'>PBC_LABL</label><input type='text' class='form-control' name='pbc_labl' required='required' ><label for='pbc_lpos'>PBC_LPOS</label><input type='text' class='form-control' name='pbc_lpos' required='required' ><label for='pbc_hdr'>PBC_HDR</label><input type='text' class='form-control' name='pbc_hdr' required='required' ><label for='pbc_hpos'>PBC_HPOS</label><input type='text' class='form-control' name='pbc_hpos' required='required' ><label for='pbc_jtfy'>PBC_JTFY</label><input type='text' class='form-control' name='pbc_jtfy' required='required' ><label for='pbc_mask'>PBC_MASK</label><input type='text' class='form-control' name='pbc_mask' required='required' ><label for='pbc_case'>PBC_CASE</label><input type='text' class='form-control' name='pbc_case' required='required' ><label for='pbc_hght'>PBC_HGHT</label><input type='text' class='form-control' name='pbc_hght' required='required' ><label for='pbc_wdth'>PBC_WDTH</label><input type='text' class='form-control' name='pbc_wdth' required='required' ><label for='pbc_ptrn'>PBC_PTRN</label><input type='text' class='form-control' name='pbc_ptrn' required='required' ><label for='pbc_bmap'>PBC_BMAP</label><input type='text' class='form-control' name='pbc_bmap' required='required' ><label for='pbc_init'>PBC_INIT</label><input type='text' class='form-control' name='pbc_init' required='required' ><label for='pbc_cmnt'>PBC_CMNT</label><input type='text' class='form-control' name='pbc_cmnt' required='required' ><label for='pbc_edit'>PBC_EDIT</label><input type='text' class='form-control' name='pbc_edit' required='required' ><label for='pbc_tag'>PBC_TAG</label><input type='text' class='form-control' name='pbc_tag' required='required' >
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{url('
/Cruds/Pbcatcol/lista
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
