<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD UTS</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-checkboxes/css/dataTables.checkboxes.css') }}">

  <!-- Pick A Day -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">

  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css') }}">
  <!-- Toastr -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <!-- Custom Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>

<body class="dark-mode hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    @include('partials.navbar')



    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="javascript:void(0);" class="brand-link text-center">
        <img src="{{ asset('assets/image/hotdiman.jpg') }}" alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8;>
        <span class="brand-text font-weight-light" style="padding-left: 5px;">Hallo <b>Hotdiman Siboro</b></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">


        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->
        @include('partials.sidebar')
        <!-- /.sidebar-menu -->

        <!-- Sidebar user (optional) -->
        {{-- <div class="user-panel d-flex pt-5">
          <div class="image">
            <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
              alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Cybershoot</a>
          </div>
        </div> --}}
      </div>
      <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      @yield('content')
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('partials.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  {{-- <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script> --}}
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
  <!-- DataTables -->
  <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/datatables-checkboxes/js/dataTables.checkboxes.min.js') }}"></script>

  <!-- AdminLTE App -->
  <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>
  <!-- Toast Alert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <!-- Momentjs -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js"></script>
  <!-- Pickaday -->
  <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
  <!-- TinyMce -->
  <script src="{{ asset('adminlte/plugins/tinymce/tinymce.min.js') }}"></script>

  <!-- Select2 -->
  <script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>

  <!-- Custom Js -->
  <script>
    // Konfigurasi Toastr
    toastr.options = {
      "closeButton": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "showDuration": "100",
      "hideDuration": "800",
      "timeOut": "5000",
      "extendedTimeOut": "800"
    };

    // Menampilkan pesan dari session
    @if (session('success'))
      toastr.success('{{ session('success') }}');
    @endif
    @if (session('error'))
      toastr.error('{{ session('error') }}');
    @endif
  </script>

  @stack('scripts')
</body>

</html>
