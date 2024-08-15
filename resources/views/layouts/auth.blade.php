<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ env('APP_NAME')}} - {{$title ?? ""}}</title>
  <meta content="" name="description">
  <meta content="Donation, Kids" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{asset('assets/assets/img/favicon.png')}}" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/admin/assets/css/style.css" rel="stylesheet">
  @livewireStyles
</head>

<body>

  <main>
    @yield('content')
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/admin/assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/admin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/admin/assets/vendor/quill/quill.min.js"></script>
  <script src="assets/admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/admin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/admin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/admin/assets/js/main.js"></script>
  @livewireScripts
</body>

</html>