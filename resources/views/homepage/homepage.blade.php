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
  <a class="navbar-brand" href="#">GENAPP</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Inicio</a>
      </li>

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

    @foreach($menu1 as $menu)
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              {{$menu->tx_fir_option}}
          </a>
          <div class="dropdown-menu">
                @foreach($menu2 as $menuo)
                  @if( $menu->tx_fir_option === $menuo->tx_fir_option )
                    <a class="dropdown-item" href="#">{{$menuo->tx_sec_option}}</a>
                  @endif
                @endforeach

          </div>
        </li>
    @endforeach

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
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <h3>
        Autenticación de Usuario
      </h3>
      <form role="form">
        <div class="form-group">
           
          <label for="exampleInputEmail1">
            Email address
          </label>
          <input class="form-control" id="exampleInputEmail1" type="email">
        </div>
        <div class="form-group">
           
          <label for="exampleInputPassword1">
            Password
          </label>
          <input class="form-control" id="exampleInputPassword1" type="password">
        </div>
        <div class="form-group">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Check me out
          </label>
        </div> 
        <button type="submit" class="btn btn-success">
          Submit
        </button>
      </form>
    </div>
    <div class="col-md-4">
    </div>
  </div>



        @component('homepage/header')
        @endcomponent
        @component('homepage/left-side')
        @endcomponent
        @component('homepage/center-side')
        @endcomponent
        @component('homepage/right-side')
        @endcomponent
        @component('homepage/footer')
        @endcomponent
        @yield('javascript-down')
        @yield('javascript-code')
    </body>
</html>