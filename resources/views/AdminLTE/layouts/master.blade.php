<!DOCTYPE html>
<html>
@include('AdminLTE.layouts.partials.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  @include('AdminLTE.layouts.partials.header')

  <!-- Left side column. contains the logo and sidebar -->

    <!-- sidebar: style can be found in sidebar.less -->
    @include('AdminLTE.layouts.partials.main_aside')
    <!-- /.sidebar -->
  <!-- Content Wrapper. Contains page content -->
    @yield('page-content')
  <!-- /.content-wrapper -->
    @include('AdminLTE.layouts.partials.footer')

  <!-- Control Sidebar -->
    @include('AdminLTE.layouts.partials.sidebar')
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
@include('AdminLTE.layouts.partials.script')
@yield('footer-load-script')
</body>
</html>
