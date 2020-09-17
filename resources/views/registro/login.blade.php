@extends('template/template')

@section('site-page')

           <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fa fa-warning"></i>
                    Login de Usuario
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">


{{ Form::open(array('action' => 'PaginaController@login', 'method' => 'POST', 'name'=>'formulario1' )) }}
{{csrf_field()}}
  <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
      <h3>
        
      </h3>
      <form role="form">
        <div class="form-group">
          <label for="exampleInputEmail1">
            Email address
          </label>
          <input class="form-control" id="exampleInputEmail1" type="email" placeholder="Indique Correo Electronico" required>
        </div>
        <div class="form-group">
          <label for="password">
            Password
          </label>
          <input class="form-control" id="password" name="password" type="password" placeholder="Indique Clave de Acceso" required>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-success">
          Enviar Datos
        </button>
        </div>
        <div class="form-group">
        <a href="{{ action('PaginaController@olvido') }}">Olvide la Contraseña</a>
        </div>
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

