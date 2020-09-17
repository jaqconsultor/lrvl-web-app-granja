@extends('template/template')

@section('site-page')
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <div class="alert alert-success">Información Enviada</div>
    </div>
    <a href="{{url('/Usuario/Login')}}">
    <button type="button" class="btn btn-primary">Volver</button>
    </a>
    <div class="col-md-4">
    </div>
  </div>
@endsection

