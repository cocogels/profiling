<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta  name="csrf-token" content="{{ csrf_token()}}">
  <title>@yield('title')</title>


  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


</head>
<body class="hold-transition sidebar-collapse layout-top-nav">
<!-- Site wrapper -->
<div class="wrapper">

    @include('include.navbar')

    @include('include.sidebar')

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        @yield('content-header')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
            @yield('content')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


    @include('include.footer')



<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>

  
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
      
    <div  class="user-header bg-dark">
        <div class="row">
          <div class="col">
            
          </div>
          <div class="col">
            <br>
            <a href="#" d>
               <img src="../../dist/img/avatar5.png" data-toggle="tooltip"  title="profile"class="img-circle elevation-2 "  alt="User Image">
            </a>
          </div>
          <div class="col">
            
          </div>
        </div>
        <div class="bg-info">
          <hr>
        </div>
        <div class="user-body bg-dark">
          <div class="row">
              <div class="col-md-10">
                &nbsp;
                 <a href="#">Profile</a>
                
              </div>
          </div>
          <!-- Menu Footer-->
          <div class="user-footer">
            <a class="ml-2" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit(); ">
                                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>

        </div>
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
</body>
</html>
