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

<form action="{{url('/Cruds/Tdatos/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='control'>CONTROL</label><input type='text' class='form-control' name='control' value='{{$data->control}}' required='required' ><br><label for='fecha'>FECHA</label><input type='text' class='form-control' name='fecha' value='{{$data->fecha}}' required='required' ><br><label for='factura'>FACTURA</label><input type='text' class='form-control' name='factura' value='{{$data->factura}}' required='required' ><br><label for='comande'>COMANDE</label><input type='text' class='form-control' name='comande' value='{{$data->comande}}' required='required' ><br><label for='cliente'>CLIENTE</label><input type='text' class='form-control' name='cliente' value='{{$data->cliente}}' required='required' ><br><label for='chofer'>CHOFER</label><input type='text' class='form-control' name='chofer' value='{{$data->chofer}}' required='required' ><br><label for='pal_azul_138'>PAL_AZUL_138</label><input type='text' class='form-control' name='pal_azul_138' value='{{$data->pal_azul_138}}' required='required' ><br><label for='pal_amari_138'>PAL_AMARI_138</label><input type='text' class='form-control' name='pal_amari_138' value='{{$data->pal_amari_138}}' required='required' ><br><label for='pal_azul_116'>PAL_AZUL_116</label><input type='text' class='form-control' name='pal_azul_116' value='{{$data->pal_azul_116}}' required='required' ><br><label for='pal_amari_116'>PAL_AMARI_116</label><input type='text' class='form-control' name='pal_amari_116' value='{{$data->pal_amari_116}}' required='required' ><br><label for='tot_138'>TOT_138</label><input type='text' class='form-control' name='tot_138' value='{{$data->tot_138}}' required='required' ><br><label for='tot_116'>TOT_116</label><input type='text' class='form-control' name='tot_116' value='{{$data->tot_116}}' required='required' ><br><label for='lugar'>LUGAR</label><input type='text' class='form-control' name='lugar' value='{{$data->lugar}}' required='required' ><br><label for='camion'>CAMION</label><input type='text' class='form-control' name='camion' value='{{$data->camion}}' required='required' ><br><label for='ver_doc'>VER_DOC</label><input type='text' class='form-control' name='ver_doc' value='{{$data->ver_doc}}' required='required' ><br><label for='ref_ext'>REF_EXT</label><input type='text' class='form-control' name='ref_ext' value='{{$data->ref_ext}}' required='required' ><br><label for='retorno'>RETORNO</label><input type='text' class='form-control' name='retorno' value='{{$data->retorno}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Tdatos/lista
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
