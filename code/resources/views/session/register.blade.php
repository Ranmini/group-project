@extends('admin.master')

@section('content')

@if ($errors)
{{ $errors}}
@endif
<div class="register-box">
  <div class="card">
    <div class="card-body register-card-body">
    <div class="login-logo">
      <link rel="stylesheet" href="css/styles.css">
      <div id="overlay"></div> 
      <a href="/"><b><img src="/dist/img/logo.jpg" alt="logo" style="width: 50%; opacity: .4"></a>
    </div>
      <p class="login-box-msg" style="color:DodgerBlue;font-size:110%;"><b>Sign Up and Start Learning!</b></p>

      <form method="post" action="{{route ('signup') }}">
        <div class="form-group has-feedback">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text fa fa-user form-control-feedback"></span>
            </div>
          <input type="text" class="form-control" name="name" placeholder="Full name" required>
          </div>
        </div>
        <div class="form-group has-feedback">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text fa fa-address-card-o form-control-feedback"></span>
            </div>
          <input type="text" class="form-control" placeholder="NIC Number" name="nic" pattern="[0-9]{9}[vV]{1}$" title="Include 9 digits and letter V  eg:123456789V" required>
          </div>
        </div>

        <div class="form-group has-feedback">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text fa fa-envelope form-control-feedback"></span>
            </div>
              <input type="email" class="form-control" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"  title ="" required>
          </div>
        </div>

        <div class="form-group has-feedback">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text fa fa-key form-control-feedback"></span>
            </div>
              <input type="password" class="form-control" placeholder="Password" name="pwd" id="password" required>
          </div>
        </div>
        <div class="form-group has-feedback">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text fa fa-key form-control-feedback"></span>
            </div>
              <input type="password" class="form-control" placeholder="Confirm Password" name="cpwd" id="confirm_password" required>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox" > I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
     <!----error checking ---->

        @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
         </div>
        @endif
        
        @if(session()->has('message'))
        <div class ="alert alert-success">
          {{session() -> get('message')}}
        </div>@endif

          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat" name="register">Register</button>
          </div>
         
          {{csrf_field() }}

          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fa fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fa fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="login" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
@endsection