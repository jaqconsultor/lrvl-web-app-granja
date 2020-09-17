@extends('template/template')

@section('site-page')
<div class="container-fluid">
    <div  class="row">
        <div class="col-xs-12 ">
            <div class="box">
             <div class="box-header">
                <div class="box-name">
                    <i class=""></i>
                    <span>
Listar DATOS_B3
                        </span>
                </div>
                <div class="box-icons">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="expand-link">
                        <i class="fa fa-expand"></i>
                    </a>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
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
        <a href="{{url('
/Cruds/Datos_b3/CrearNuevo
        ')}}" >
            <button  type="button" class="btn btn-primary">Añadir</button>
        </a>

       <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
            <thead>
                 <tr>
<th>ID</th><th>USUARIO</th><th>NU_PAGINA</th><th>NU_REGISTRO</th><th>CAMPO_01</th><th>CAMPO_01_1</th><th>CAMPO_02</th><th>CAMPO_03</th><th>CAMPO_04</th><th>CAMPO_05</th><th>CAMPO_06</th><th>CAMPO_07</th><th>CAMPO_08</th><th>CAMPO_09</th><th>CAMPO_10</th><th>CAMPO_11</th><th>CAMPO_12</th><th>CAMPO_13</th><th>CAMPO_14</th><th>CAMPO_15</th><th>CAMPO_16</th><th>CAMPO_17</th><th>CAMPO_18</th><th>CAMPO_19</th><th>CAMPO_20</th><th>CAMPO_43</th><th>CAMPO_44</th><th>CAMPO_45</th><th>CAMPO_46</th><th>CAMPO_47</th><th>CAMPO_48</th><th>CAMPO_49</th><th>CAMPO_50</th><th>CAMPO_51</th><th>NU_CONTROL</th>
                    <th>Operaciones</th>
                           
                </tr>
             </thead>
            @if(count($data)>=1)
                @foreach($data as $d)
                    <tr>
<td>{{$d->id}}</td><td>{{$d->usuario}}</td><td>{{$d->nu_pagina}}</td><td>{{$d->nu_registro}}</td><td>{{$d->campo_01}}</td><td>{{$d->campo_01_1}}</td><td>{{$d->campo_02}}</td><td>{{$d->campo_03}}</td><td>{{$d->campo_04}}</td><td>{{$d->campo_05}}</td><td>{{$d->campo_06}}</td><td>{{$d->campo_07}}</td><td>{{$d->campo_08}}</td><td>{{$d->campo_09}}</td><td>{{$d->campo_10}}</td><td>{{$d->campo_11}}</td><td>{{$d->campo_12}}</td><td>{{$d->campo_13}}</td><td>{{$d->campo_14}}</td><td>{{$d->campo_15}}</td><td>{{$d->campo_16}}</td><td>{{$d->campo_17}}</td><td>{{$d->campo_18}}</td><td>{{$d->campo_19}}</td><td>{{$d->campo_20}}</td><td>{{$d->campo_43}}</td><td>{{$d->campo_44}}</td><td>{{$d->campo_45}}</td><td>{{$d->campo_46}}</td><td>{{$d->campo_47}}</td><td>{{$d->campo_48}}</td><td>{{$d->campo_49}}</td><td>{{$d->campo_50}}</td><td>{{$d->campo_51}}</td><td>{{$d->nu_control}}</td>
                        <td>
<a href="{{url('/Cruds/Datos_b3/Eliminar/'.$d->id)}}"><input type='button' class='btn'  value='Eliminar'></a>
<a href="{{url('/Cruds/Datos_b3/Modificar/'.$d->id)}}"><input type='button' class='btn'  value='Modificar' ></a>
                        </td>

                    </tr>
                @endforeach
            @else
                <tr >
                    <td colspan="3">
                        No hay Registros Disponibles
                    </td>
                </tr>
            @endif
        </table>  
                    
         </div>
            
            </div>
        </div>
    </div>
</div>

            
@endsection
@section('javascript-code')


@endsection
