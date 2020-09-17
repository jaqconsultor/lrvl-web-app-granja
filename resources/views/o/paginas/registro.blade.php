@extends('template/template')

@section('site-page')
{{ Form::open(array('action' => 'UsuarioRegistroController@registro_enviado', 'autocomplete' => 'off',  'method' => 'POST', 'name'=>'formulario1' )) }}
  {{csrf_field()}}
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <h3>
        Registro De Usuario
      </h3>
      <form role="form">
        <div class="form-group">
          <input class="form-control" id="login" name="login" type="text" placeholder="Indique su Alias o Apodo" required>
        </div>
        <div class="form-group">
          <input class="form-control" id="name" name="name" type="text" placeholder="Indique Su Nombre Completo" required>
        </div>
        <div class="form-group">
          <input class="form-control" id="email" name="email" type="email" placeholder="Indique Su Correo Electronico" required>
        </div>
        <div class="form-group">
          <input class="form-control" id="password" name="password" type="password" placeholder="Indique Clave de Acceso" required>
          <span class="help-block" id="error"></span>
        </div>
        <div class="form-group">
          <input class="form-control" id="password2" name="password2" type="password" placeholder="Verifique Clave de Acceso" required>
          <span class="help-block" id="error"></span>
        </div>
        <div class="form-group">
        </div>
        <button type="submit" class="btn btn-success">
          Submit
        </button>
      </form>
    </div>
    <div class="col-md-4">
    </div>
  </div>
</form>    
@endsection

