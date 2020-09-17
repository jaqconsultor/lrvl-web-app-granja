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

<form action="{{url('/Cruds/Datos_b3/GuardarEdicion/'.$data->id)}}"method='post'>

               {{csrf_field()}}
               <div class="form-group">
<label for='usuario'>USUARIO</label><input type='text' class='form-control' name='usuario' value='{{$data->usuario}}' required='required' ><br><label for='nu_pagina'>NU_PAGINA</label><input type='text' class='form-control' name='nu_pagina' value='{{$data->nu_pagina}}' required='required' ><br><label for='nu_registro'>NU_REGISTRO</label><input type='text' class='form-control' name='nu_registro' value='{{$data->nu_registro}}' required='required' ><br><label for='campo_01'>CAMPO_01</label><input type='text' class='form-control' name='campo_01' value='{{$data->campo_01}}' required='required' ><br><label for='campo_01_1'>CAMPO_01_1</label><input type='text' class='form-control' name='campo_01_1' value='{{$data->campo_01_1}}' required='required' ><br><label for='campo_02'>CAMPO_02</label><input type='text' class='form-control' name='campo_02' value='{{$data->campo_02}}' required='required' ><br><label for='campo_03'>CAMPO_03</label><input type='text' class='form-control' name='campo_03' value='{{$data->campo_03}}' required='required' ><br><label for='campo_04'>CAMPO_04</label><input type='text' class='form-control' name='campo_04' value='{{$data->campo_04}}' required='required' ><br><label for='campo_05'>CAMPO_05</label><input type='text' class='form-control' name='campo_05' value='{{$data->campo_05}}' required='required' ><br><label for='campo_06'>CAMPO_06</label><input type='text' class='form-control' name='campo_06' value='{{$data->campo_06}}' required='required' ><br><label for='campo_07'>CAMPO_07</label><input type='text' class='form-control' name='campo_07' value='{{$data->campo_07}}' required='required' ><br><label for='campo_08'>CAMPO_08</label><input type='text' class='form-control' name='campo_08' value='{{$data->campo_08}}' required='required' ><br><label for='campo_09'>CAMPO_09</label><input type='text' class='form-control' name='campo_09' value='{{$data->campo_09}}' required='required' ><br><label for='campo_10'>CAMPO_10</label><input type='text' class='form-control' name='campo_10' value='{{$data->campo_10}}' required='required' ><br><label for='campo_11'>CAMPO_11</label><input type='text' class='form-control' name='campo_11' value='{{$data->campo_11}}' required='required' ><br><label for='campo_12'>CAMPO_12</label><input type='text' class='form-control' name='campo_12' value='{{$data->campo_12}}' required='required' ><br><label for='campo_13'>CAMPO_13</label><input type='text' class='form-control' name='campo_13' value='{{$data->campo_13}}' required='required' ><br><label for='campo_14'>CAMPO_14</label><input type='text' class='form-control' name='campo_14' value='{{$data->campo_14}}' required='required' ><br><label for='campo_15'>CAMPO_15</label><input type='text' class='form-control' name='campo_15' value='{{$data->campo_15}}' required='required' ><br><label for='campo_16'>CAMPO_16</label><input type='text' class='form-control' name='campo_16' value='{{$data->campo_16}}' required='required' ><br><label for='campo_17'>CAMPO_17</label><input type='text' class='form-control' name='campo_17' value='{{$data->campo_17}}' required='required' ><br><label for='campo_18'>CAMPO_18</label><input type='text' class='form-control' name='campo_18' value='{{$data->campo_18}}' required='required' ><br><label for='campo_19'>CAMPO_19</label><input type='text' class='form-control' name='campo_19' value='{{$data->campo_19}}' required='required' ><br><label for='campo_20'>CAMPO_20</label><input type='text' class='form-control' name='campo_20' value='{{$data->campo_20}}' required='required' ><br><label for='campo_43'>CAMPO_43</label><input type='text' class='form-control' name='campo_43' value='{{$data->campo_43}}' required='required' ><br><label for='campo_44'>CAMPO_44</label><input type='text' class='form-control' name='campo_44' value='{{$data->campo_44}}' required='required' ><br><label for='campo_45'>CAMPO_45</label><input type='text' class='form-control' name='campo_45' value='{{$data->campo_45}}' required='required' ><br><label for='campo_46'>CAMPO_46</label><input type='text' class='form-control' name='campo_46' value='{{$data->campo_46}}' required='required' ><br><label for='campo_47'>CAMPO_47</label><input type='text' class='form-control' name='campo_47' value='{{$data->campo_47}}' required='required' ><br><label for='campo_48'>CAMPO_48</label><input type='text' class='form-control' name='campo_48' value='{{$data->campo_48}}' required='required' ><br><label for='campo_49'>CAMPO_49</label><input type='text' class='form-control' name='campo_49' value='{{$data->campo_49}}' required='required' ><br><label for='campo_50'>CAMPO_50</label><input type='text' class='form-control' name='campo_50' value='{{$data->campo_50}}' required='required' ><br><label for='campo_51'>CAMPO_51</label><input type='text' class='form-control' name='campo_51' value='{{$data->campo_51}}' required='required' ><br><label for='nu_control'>NU_CONTROL</label><input type='text' class='form-control' name='nu_control' value='{{$data->nu_control}}' required='required' ><br>
               <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{url('
/Cruds/Datos_b3/lista
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
