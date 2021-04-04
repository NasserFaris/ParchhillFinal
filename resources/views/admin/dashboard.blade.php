
@include('admin.layouts.header')
@include('admin.layouts.sidebar')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
    
    @include('admin.inc.messages')
    @yield('content')      
  <!-- .content-header -->

  </div><!-- /.content-wrapper -->

@include('admin.layouts.footer')