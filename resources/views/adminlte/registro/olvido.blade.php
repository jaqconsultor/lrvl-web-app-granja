@extends('adminlte/templater')



@section('site-page')

<div class="login-box">
  <div class="login-logo">
           @if ( isset( $projects ) )
              @foreach($projects as $project)
                {{$project->nb_acronym}}
              @endforeach        
          @endif    
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Indique su correo</p>

      <form action="{{ action('AdminLte3Controller@login') }}" method="post">
      {{csrf_field()}}
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email">
          <span class="fa fa-envelope form-control-feedback"></span>
        </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      
        <a href="{{ action('AdminLte3Controller@registro') }}" class="text-center">Register a new membership</a>
      
      
        <a href="{{ action('AdminLte3Controller@login') }}" class="text-center">I already have a membership</a>
      
      <br>
      </form>
      <!-- /.social-auth-links -->
   </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>



@endsection
