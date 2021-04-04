
<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Welcome
    </div>
    <!-- Default to the left -->
  <strong>Copyright &copy; 2020-{{ date('Y') }} <a href="{{url('/')}}">ParchHill</a>.</strong> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
{{-- 
<!-- jQuery -->
<script src="{{url('/')}}/bower_components/admin-lte/plugins/jquery/jquery.min.js"></script> --}}
<!-- Bootstrap 4 -->
<script src="{{url('/')}}/bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('/')}}/bower_components/admin-lte/dist/js/adminlte.min.js"></script>
<!--datatables-->
<script src="{{url('/')}}/bower_components/admin-lte/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{url('/')}}/bower_components/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('/')}}/bower_components/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
@yield('page_script')
</body>
</html>
