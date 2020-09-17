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
Listar PRODUCTOS
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
/Cruds/Productos/CrearNuevo
        ')}}" >
            <button  type="button" class="btn btn-primary">Añadir</button>
        </a>

       <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
            <thead>
                 <tr>
<th>ID_PRODUCTO</th><th>ID_LINEA</th><th>ID_MARCA</th><th>ID_MODELO</th><th>DESCRIP</th><th>VALORV</th><th>VALOR2</th><th>VALOR3</th><th>EXISTMIN</th><th>EXISTEN</th><th>ULTPROV</th><th>DOCPROV</th><th>VALORC</th><th>FECULTACT</th><th>FCREA</th><th>USUARIO</th><th>ID_TIPO</th><th>CANTIDAD</th><th>PRECIOP</th><th>ESTADO</th><th>CODE_BAR_INTERNAL</th><th>CODE_BAR_EXTERNAL</th><th>CODE_BAR_UPC</th><th>TENTREGA</th><th>ID_PROV</th><th>ID_UNIDADM</th><th>COD_ADUANA</th><th>ID_PRODUCTO_CODIGO</th><th>IN_GESTIONABLE</th><th>IN_CAJA</th><th>IN_TWISTT</th><th>ID_PRIMARIA</th>
                    <th>Operaciones</th>
                           
                </tr>
             </thead>
            @if(count($data)>=1)
                @foreach($data as $d)
                    <tr>
<td>{{$d->id_producto}}</td><td>{{$d->id_linea}}</td><td>{{$d->id_marca}}</td><td>{{$d->id_modelo}}</td><td>{{$d->descrip}}</td><td>{{$d->valorv}}</td><td>{{$d->valor2}}</td><td>{{$d->valor3}}</td><td>{{$d->existmin}}</td><td>{{$d->existen}}</td><td>{{$d->ultprov}}</td><td>{{$d->docprov}}</td><td>{{$d->valorc}}</td><td>{{$d->fecultact}}</td><td>{{$d->fcrea}}</td><td>{{$d->usuario}}</td><td>{{$d->id_tipo}}</td><td>{{$d->cantidad}}</td><td>{{$d->preciop}}</td><td>{{$d->estado}}</td><td>{{$d->code_bar_internal}}</td><td>{{$d->code_bar_external}}</td><td>{{$d->code_bar_upc}}</td><td>{{$d->tentrega}}</td><td>{{$d->id_prov}}</td><td>{{$d->id_unidadm}}</td><td>{{$d->cod_aduana}}</td><td>{{$d->id_producto_codigo}}</td><td>{{$d->in_gestionable}}</td><td>{{$d->in_caja}}</td><td>{{$d->in_twistt}}</td><td>{{$d->id_primaria}}</td>
                        <td>
<a href="{{url('/Cruds/Productos/Eliminar/'.$d->id)}}"><input type='button' class='btn'  value='Eliminar'></a>
<a href="{{url('/Cruds/Productos/Modificar/'.$d->id)}}"><input type='button' class='btn'  value='Modificar' ></a>
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
