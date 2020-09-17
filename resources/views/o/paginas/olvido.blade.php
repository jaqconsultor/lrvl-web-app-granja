@extends('template/template')

@section('site-page')
{{ Form::open(array('action' => 'UsuarioRegistroController@olvido_enviado', 'autocomplete' => 'off', 'method' => 'POST', 'name'=>'formulario1' )) }}
  {{csrf_field()}}
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <h4>
        Indique su Correo Electronico
      </h4>
      <form role="form">
        <div class="form-group">
          <input class="form-control" id="exampleInputEmail1" type="email" placeholder="Indique Correo Electronico" required>
        </div>
        <button type="submit" class="btn btn-success">
          Enviar Datos
        </button>
    </div>
    <div class="col-md-4">
    </div>
  </div>
</form>  
@endsection

