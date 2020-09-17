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


<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  
		@if ( isset( $projects ) )
			  @foreach($projects as $project)
				  <a class="navbar-brand" href="#">{{$project->nb_acronym}}</a>
			  @endforeach        
		@endif
  
  

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


    @if ( $modulos_c > 0  )
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Modulos
      </a>
      <div class="dropdown-menu">
			  @foreach($modulos as $modulo)
				  <a class="dropdown-item" href="#">{{$modulo->nb_module}}</a>
			  @endforeach        
      </div>
    </li>
    @endif

    @if ( $secciones_c > 0 )
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Secciones
      </a>
      <div class="dropdown-menu">
			  @foreach($secciones as $seccion)
				  <a class="dropdown-item" href="#">{{$seccion->nb_sections}}</a>
			  @endforeach        
      </div>
    </li>
    @endif
	
    @if ( $menu1_c > 0 )
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Menu Secciones
      </a>
      <div class="dropdown-menu">
			  @foreach($menu1 as $menu)
				  <a class="dropdown-item" href="#">{{$menu->tx_fir_option}}</a>
			  @endforeach        
      </div>
    </li>
    @endif
	
	
@if ( $menu1_c > 0 )
    @foreach($menu1 as $menu)
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              {{$menu->tx_fir_option}}
          </a>
          <div class="dropdown-menu">
                @if ( isset( $menu2 ) )
                @foreach($menu2 as $menuo)
                  @if( $menu->tx_fir_option === $menuo->tx_fir_option )
                    <a class="dropdown-item" href="#">{{$menuo->tx_sec_option}}</a>
                  @endif
                @endforeach
                @endif
          </div>
        </li>
    @endforeach
@endif

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

@component('adminlte/asset-down')
@endcomponent

@yield('javascript-down')

@yield('javascript-code')


    </body>
</html>



