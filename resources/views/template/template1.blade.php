<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Marketing - {{ $title }}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

         @component('template/asset-up')
         @endcomponent

         @yield('javascript-up')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body class="@php echo Session::get('tema'); @endphp">
            @include('alerts.information')
            @include('alerts.request')
            @include('alerts.success')
            @component('template/header')
            @endcomponent


        <div class="wrapper row-offcanvas row-offcanvas-left">

            @component('template/left-side')
            @endcomponent

            <aside class="right-side">           
                @php
                    $msgsuccess = Session::get('msgsuccess');
                    $msginfo = Session::get('msginfo');
                    $msgwarning = Session::get('msgwarning');
                    $msgdanger = Session::get('msgdanger');
                @endphp
                @isset($msgsuccess)
                    <div class="alert alert-success">
                        {{ $msgsuccess }}
                    </div>
                @endisset
                @isset($msginfo)
                    <div class="alert alert-info">
                        {{ $msgwarning }}
                    </div>
                @endisset
                @isset($msgwarning)
                    <div class="alert alert-warning">
                        {{ $msgwarning }}
                    </div>
                @endisset
                @isset($msgdanger)
                    <div class="alert alert-danger">
                        {{ $msgdanger }}
                    </div>
                @endisset
                @php
                    session()->put('msgsuccess', null);
                    session()->put('msginfo', null);
                    session()->put('msgwarning', null);
                    session()->put('msgdanger', null);
                @endphp
            </aside><!-- /.right-side -->

            @component('template/right-side')
            @endcomponent

        </div><!-- ./wrapper -->

        @component('template/asset-down')
        @endcomponent

        @yield('javascript-down')

        @yield('javascript-code')

    </body>
</html>