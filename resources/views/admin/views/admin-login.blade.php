@extends('admin.layout.master')
@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="#"style ="color:white;"><b>Admin</b>Sta.Cruz</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg" style ="color:white;">Sign in to start your session</p>

      <form action="{{route('admin.login')}}" method="post">
        {{csrf_field()}}
        <div class="col-mb-6">
          <input type="email" class="form-control" name = "email" placeholder="Email">
          <div class="input-group-append input-group-text">
              <span class="fas fa-envelope"></span>
          </div>
        </div>
        <div class="col-mb-6 pb-6">
          <input type="password" class="form-control" name = "password" placeholder="Password">
          <div class="input-group-append input-group-text">
              <span class="fas fa-lock"></span>
          </div>
        </div>
        {{-- <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> --}}
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <br>
      <p class="mb-1">
        <a href="#">Forgot Password?</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@endsection
