<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Informatics College Manila | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


</head>
<body class="hold-transition login-page">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 login-box">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body login-card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}
                            </label>
                            <div class="col-md-6">
                                <div class="input-group">
            
                                    <input id="email" type="email"
                                        class="form-control
                                        @error('email') is-invalid
                                        @enderror" name="email"
                                        value="{{ old('email') }}" required
                                        autocomplete="off"
                                        placeholder="sample@example.com"
                                        autofocus>
                                       <div class="input-group-append">
                                        <div class="input-group-text">
                                          <span class="fas fa-envelope"></span>
                                        </div>
                                      </div>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <div class="input-group">

                                    <input id="password" type="password"
                                        class="form-control
                                        @error('password') is-invalid @enderror"
                                        name="password"
                                        required
                                        placeholder=""
                                        autocomplete="current-password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <center>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary btn-md btn-block">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </center>
                        </div>
                    <center>
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-check">
                                <input class="form-check-input"
                                type="checkbox"
                                name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-sm">
                            @if (Route::has('password.request'))
                               <a class="btn btn-link" href="{{ route('password.request') }}">
                                   Forgot Your Password?
                               </a>
                           @endif
                        </div>
                    </div>
                </center>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>


