<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  @yield('meta')
  <title>@yield('title')</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{url('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('adminlte/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Other CSS -->
  @stack('css')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <x-alt-navbar>
  @altNavbar
  </x-alt-navbar>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <x-alt-sidebar>
  @altSidebar
  </x-alt-sidebar>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @hasSection('heading')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield('heading')</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
    @else
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid pt-3">
    @endif
        @yield('content')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">
   @altFooter
  </footer> 
  <!-- To the right -->
</div>
<!-- ./wrapper -->
@stack('modal')
<!-- jQuery -->
<script src="{{url('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- Other Javascript -->
@stack('js')
</body>
</html>