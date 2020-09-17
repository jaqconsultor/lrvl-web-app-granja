@extends('template/template')

@section('site-page')

           <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fa fa-warning"></i>
                    Registro De Usuario
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">


{{ Form::open(array('action' => 'PaginaController@registro', 'autocomplete' => 'off',  'method' => 'POST', 'name'=>'formulario1' )) }}
  {{csrf_field()}}
  <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
      <h3>
        
      </h3>
      <form role="form">
        <div class="form-group">
          <label for="password">
            Nombre 
          </label>
          <input class="form-control" id="name" name="name" type="text" placeholder="Indique Su Nombre Completo" required>
        </div>
        <div class="form-group">
          <label for="password">
            Apellido
          </label>
          <input class="form-control" id="namea" name="namea" type="text" placeholder="Indique Su Apellido Completo" required>
        </div>
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
          <label for="password">
            Verifique el Password
          </label>
          <input class="form-control" id="password2" name="password2" type="password" placeholder="Verifique Clave de Acceso" required>
          <span class="help-block" id="error"></span>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success">
            Submit
          </button>
        </div>
      </form>
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

