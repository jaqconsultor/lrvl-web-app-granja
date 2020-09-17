<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{{ $title }}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <link rel="stylesheet" href="{{ asset('recursos/bootstrap.min.css') }}">
        <script src="{{ asset('recursos/jquery.min.js') }}"></script>
        <script src="{{ asset('recursos/popper.min.js') }}"></script>
        <script src="{{ asset('recursos/bootstrap.min.js') }}"></script> 
        @if( false )
        <link rel="stylesheet" href="{{ asset('recursos/bootstrap.epic.css') }}">
        @endif
        @yield('javascript-up')
    </head>
    
    <body>


<nav class="navbar navbar-expand-md ">
  <!-- Brand -->
  
  <a class="navbar-brand" href="#">(Proyecto)</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="{{ action('PaginaController@index') }}">Inicio</a>
      </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Del Registro de Usuario
      </a>
      <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ action('PaginaController@login') }}">Login</a>
            <a class="dropdown-item" href="{{ action('PaginaController@registro') }}">Registro de Usuario</a>            
            <a class="dropdown-item" href="{{ action('PaginaController@olvido') }}">Olvide Contraseña</a>            
      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Tablas Iniciales
      </a>
      <div class="dropdown-menu">
          <a class="dropdown-item" href="{{ action('EmpresasCrudController@index') }}">Empresas</a>
          <a class="dropdown-item" href="{{ action('ClientsCrudController@index') }}">Clientes/Proveedor</a>
          <a class="dropdown-item" href="{{ action('ChauffeurCrudController@index') }}">Transport</a>
          <a class="dropdown-item" href="{{ action('CamionCrudController@index') }}">Camion</a>
          <a class="dropdown-item" href="{{ action('AereolineasCrudController@index') }}">Compañia Aerea</a>
          <a class="dropdown-item" href="{{ action('EmbarquementCrudController@index') }}">Embarque</a>
      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Consulta
      </a>
      <div class="dropdown-menu">
				  <a class="dropdown-item" href="#">Registro de Control</a>
      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Reportes
      </a>
      <div class="dropdown-menu">
				  <a class="dropdown-item" href="#">Reporte 1</a>
          <a class="dropdown-item" href="#">Reporte 2</a>
          <a class="dropdown-item" href="#">Reporte 3</a>
      </div>
    </li>
	
	
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Usuario
      </a>
      <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Perfil</a>
            <a class="dropdown-item" href="#">Cerrar Sesión</a>            
      </div>
    </li>

    </ul>
  </div>
</nav>


  <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-10">
                <br>
                @yield('site-page')
      </div>
      <div class="col-md-1">
      </div>
  </div>


@yield('javascript-down')

@yield('javascript-code')


    </body>
</html>



