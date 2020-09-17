@extends('template/template')

@section('site-page')
{{ Form::open(array('action' => 'UsuarioRegistroController@login_enviado', 'method' => 'POST', 'name'=>'formulario1' )) }}
{{csrf_field()}}
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <h3>
        Autenticación de Usuario
      </h3>
      <form role="form">
        <div class="form-group">
          <input class="form-control" id="login" name="login" type="text" placeholder="Indique su Alias o Apodo" required>
        </div>
        <div class="form-group">
          <input class="form-control" id="password" name="password" type="password" placeholder="Indique Clave de Acceso" required>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-success">
          Enviar Datos
        </button>
        </div>
        <div class="form-group">
        <a href="{{ action('UsuarioRegistroController@olvido') }}">Olvide la Contraseña</a>
        </div>
    </div>
    <div class="col-md-4">
    </div>
  </div>
</form>    
@endsection

