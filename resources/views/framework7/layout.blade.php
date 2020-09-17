<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>My App</title>


    <link rel="stylesheet" href="{{ asset('framework7/css/framework7.ios.min.css') }}">
    <link rel="stylesheet" href="{{ asset('framework7/css/framework7.ios.colors.min.css') }}">
    <link rel="stylesheet" href="{{ asset('framework7/css/my-app.css') }}">

    <!-- Path to Framework7 Library CSS-->
    <!--<link rel="stylesheet" href="css/framework7.ios.min.css">-->
    <!--<link rel="stylesheet" href="css/framework7.ios.colors.min.css">-->
    <!-- Path to your custom app styles-->
    <!--<link rel="stylesheet" href="css/my-app.css">-->

        @if( false )
        <link rel="stylesheet" href="{{ asset('recursos/bootstrap.min.css') }}">
        <script src="{{ asset('recursos/jquery.min.js') }}"></script>
        <script src="{{ asset('recursos/popper.min.js') }}"></script>
        <script src="{{ asset('recursos/bootstrap.min.js') }}"></script> 
        <link rel="stylesheet" href="{{ asset('recursos/bootstrap.epic.css') }}">
        @endif
        @yield('javascript-up')
  </head>
  <body>
    <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar-overlay"></div>
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>
    <!-- Left panel with reveal effect-->
    <div class="panel panel-left panel-reveal">
      <div class="content-block">
        <p>Left panel content goes here</p>
      </div>
    </li>

		@if ( isset( $modulos ) )
			  @foreach($modulos as $modulo)
				<div class="content-block-title">Modulos</div>		
					  <div class="list-block">
						<ul>
						  <li><a href="about.html" class="item-link">
							  <div class="item-content">
								<div class="item-inner"> 
								  <div class="item-title">{{$modulo->nb_module}}</div>
								</div>
							  </div></a>
							</li>
						</ul>
					  </div>
			  @endforeach        
		@endif
		
        @yield('left-panel')
      </div>
    </div>
    <!-- Right panel with cover effect-->
    <div class="panel panel-right panel-cover">
      <div class="content-block">
        <p>Right panel content goes here</p>



@if ( isset( $menu1 ) )
    @foreach($menu1 as $menu)

		<div class="content-block-title">Opciones de Menu</div>		
              <div class="list-block">
                <ul>
                  <li><a href="about.html" class="item-link">
                      <div class="item-content">
                        <div class="item-inner"> 
                          <div class="item-title">{{$menu->tx_fir_option}}</div>
                        </div>
                      </div></a>
					</li>
                </ul>
              </div>

                @if ( isset( $menu2 ) )
					@foreach($menu2 as $menuo)
					  @if( $menu->tx_fir_option === $menuo->tx_fir_option )
						<a class="dropdown-item" href="#">{{$menuo->tx_sec_option}}</a>
					  @endif
					@endforeach
                @endif
    @endforeach
@endif

		
		
		
        @yield('right-panel')
      </div>
    </div>
    <!-- Views-->
    <div class="views">
      <!-- Your main view, should have "view-main" class-->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
            <!-- We have home navbar without left link-->
            <div class="center sliding">Awesome App</div>
            <div class="right">
              <!-- Right link contains only icon - additional "icon-only" class--><a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
            </div>
          </div>
        </div>
        <!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Page, data-page contains page name-->
          <div data-page="index" class="page">
            <!-- Scrollable page content-->
            <div class="page-content">
              <div class="content-block-title">Welcome To My Awesome App</div>
              <div class="content-block">
                <div class="content-block-inner">
                  <p>Couple of worlds here because my app is so awesome!</p>
                  <p>Duis sed erat ac eros ultrices pharetra id ut tellus. Praesent rhoncus enim ornare ipsum aliquet ultricies. Pellentesque sodales erat quis elementum sagittis.</p>
                </div>
              </div>
              <div class="content-block-title">What about simple navigation?</div>
              <div class="content-block-title">Side panels</div>
              <div class="content-block">
                <div class="row">
                  <div class="col-50"><a href="#" data-panel="left" class="button open-panel">Left Panel</a></div>
                  <div class="col-50"><a href="#" data-panel="right" class="button open-panel">Right Panel</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Bottom Toolbar-->
        <div class="toolbar">
          <div class="toolbar-inner"><a href="#" class="link">Link 1</a><a href="#" class="link">Link 2</a></div>
        </div>
      </div>
    </div>

    <script type="text/javascript"  src="{{ asset('framework7/js/framework7.min.js') }}"></script>
    <script  type="text/javascript" src="{{ asset('framework7/js/my-app.js') }}"></script>


    <!-- Path to Framework7 Library JS-->
    <!-- <script type="text/javascript" src="js/framework7.min.js"></script>-->
    <!-- Path to your app js-->
    <!-- <script type="text/javascript" src="js/my-app.js"></script>-->

    @yield('javascript-down')

  </body>
</html>