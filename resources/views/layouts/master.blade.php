<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('vendors/dist/css/adminlte.min.css') }}">
  <!-- Color Picker -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
  <!-- Summernote -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/summernote/summernote-bs4.min.css') }}">
  <!-- Select Multiple, Select2 -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    @include('layouts.header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @yield('header-content')
        
        <!-- Main content -->
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    @include('layouts.sidebar_control')
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('vendors/dist/js/adminlte.min.js') }}"></script>
<!-- Color Picker -->
<script src="{{ asset('vendors/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<!-- Select Multiple, Select2 -->
<script src="{{ asset('vendors/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('vendors/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- Custom file input -->
<script src="{{ asset('vendors/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
</body>
</html>
