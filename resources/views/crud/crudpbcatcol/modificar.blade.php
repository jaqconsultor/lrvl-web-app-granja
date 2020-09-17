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

<form action="{{url('/Cruds/Pbcatcol/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='pbc_tnam'>PBC_TNAM</label><input type='text' class='form-control' name='pbc_tnam' value='{{$data->pbc_tnam}}' required='required' ><br><label for='pbc_tid'>PBC_TID</label><input type='text' class='form-control' name='pbc_tid' value='{{$data->pbc_tid}}' required='required' ><br><label for='pbc_ownr'>PBC_OWNR</label><input type='text' class='form-control' name='pbc_ownr' value='{{$data->pbc_ownr}}' required='required' ><br><label for='pbc_cnam'>PBC_CNAM</label><input type='text' class='form-control' name='pbc_cnam' value='{{$data->pbc_cnam}}' required='required' ><br><label for='pbc_cid'>PBC_CID</label><input type='text' class='form-control' name='pbc_cid' value='{{$data->pbc_cid}}' required='required' ><br><label for='pbc_labl'>PBC_LABL</label><input type='text' class='form-control' name='pbc_labl' value='{{$data->pbc_labl}}' required='required' ><br><label for='pbc_lpos'>PBC_LPOS</label><input type='text' class='form-control' name='pbc_lpos' value='{{$data->pbc_lpos}}' required='required' ><br><label for='pbc_hdr'>PBC_HDR</label><input type='text' class='form-control' name='pbc_hdr' value='{{$data->pbc_hdr}}' required='required' ><br><label for='pbc_hpos'>PBC_HPOS</label><input type='text' class='form-control' name='pbc_hpos' value='{{$data->pbc_hpos}}' required='required' ><br><label for='pbc_jtfy'>PBC_JTFY</label><input type='text' class='form-control' name='pbc_jtfy' value='{{$data->pbc_jtfy}}' required='required' ><br><label for='pbc_mask'>PBC_MASK</label><input type='text' class='form-control' name='pbc_mask' value='{{$data->pbc_mask}}' required='required' ><br><label for='pbc_case'>PBC_CASE</label><input type='text' class='form-control' name='pbc_case' value='{{$data->pbc_case}}' required='required' ><br><label for='pbc_hght'>PBC_HGHT</label><input type='text' class='form-control' name='pbc_hght' value='{{$data->pbc_hght}}' required='required' ><br><label for='pbc_wdth'>PBC_WDTH</label><input type='text' class='form-control' name='pbc_wdth' value='{{$data->pbc_wdth}}' required='required' ><br><label for='pbc_ptrn'>PBC_PTRN</label><input type='text' class='form-control' name='pbc_ptrn' value='{{$data->pbc_ptrn}}' required='required' ><br><label for='pbc_bmap'>PBC_BMAP</label><input type='text' class='form-control' name='pbc_bmap' value='{{$data->pbc_bmap}}' required='required' ><br><label for='pbc_init'>PBC_INIT</label><input type='text' class='form-control' name='pbc_init' value='{{$data->pbc_init}}' required='required' ><br><label for='pbc_cmnt'>PBC_CMNT</label><input type='text' class='form-control' name='pbc_cmnt' value='{{$data->pbc_cmnt}}' required='required' ><br><label for='pbc_edit'>PBC_EDIT</label><input type='text' class='form-control' name='pbc_edit' value='{{$data->pbc_edit}}' required='required' ><br><label for='pbc_tag'>PBC_TAG</label><input type='text' class='form-control' name='pbc_tag' value='{{$data->pbc_tag}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Pbcatcol/lista
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
