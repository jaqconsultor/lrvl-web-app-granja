@extends('template/template')

@section('site-page')


           <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fa fa-warning"></i>
                    Indique su Correo Electronico
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">



{{ Form::open(array('action' => 'PaginaController@olvido', 'autocomplete' => 'off', 'method' => 'POST', 'name'=>'formulario1' )) }}
  {{csrf_field()}}
  <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
      <h4>
        
      </h4>
       <div class="form-group">
          <label for="exampleInputEmail1">
            Email address
          </label>
          <input class="form-control" id="exampleInputEmail1" type="email" placeholder="Indique Correo Electronico" required>
        </div>
        <button type="submit" class="btn btn-success">
          Enviar Datos
        </button>
    </div>
    <div class="col-md-2">
    </div>
  </div>
</form>  


                </div>
                <!-- /.card-body -->
              </div>

            </div>

@endsection

