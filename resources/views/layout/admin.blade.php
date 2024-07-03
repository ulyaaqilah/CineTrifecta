<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>DOKUMENTASI</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{ asset('assets/images/movie.jpeg') }}">
</head>
<body>
    <div class="container-scroller">
        <!-- Bagian sidebar dan navigasi yang tetap -->
        @include('partials._sidebar') <!-- Misalnya Anda memiliki file _sidebar.blade.php yang berisi sidebar -->
        <div class="container-fluid page-body-wrapper">
            <!-- Bagian navbar yang tetap -->
            @include('partials._navbar') <!-- Misalnya Anda memiliki file _navbar.blade.php yang berisi navbar -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content') <!-- Bagian konten yang akan diganti oleh halaman spesifik yang meng-extend layout ini -->
                </div>
      <!-- main-panel -->

      <!-- plugins:js -->
      <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
      <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
      <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
      <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
      <script src="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
      <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
      <script src="{{ asset('assets/js/misc.js') }}"></script>
      <script src="{{ asset('assets/js/settings.js') }}"></script>
      <script src="{{ asset('assets/js/todolist.js') }}"></script>
      <!-- endinject -->
      <!-- Custom js for this page -->
      <script src="{{ asset('assets/js/dashboard.js') }}"></script>
      <!-- End custom js for this page -->
    </div>
    <!-- container-scroller -->
  </div>
  <!-- End of wrapper -->
</body>
</html>
