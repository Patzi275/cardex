
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS -->
  <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="css/splide.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/select2.min.css">
  <link rel="stylesheet" href="css/main.css">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
  <link rel="apple-touch-icon" href="icon/favicon-32x32.png">
  <title>Waydex – @yield('title')</title>

</head>
<body>
  @include('layouts.partials.header')

  <!-- main content -->
  <main class="main">
    @yield('main')
  </main>
  <!-- end main content -->

  @include('layouts.partials.footer')

  <!-- JS -->
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/splide.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/select2.min.js"></script>
  <script src="js/smooth-scrollbar.js"></script>
  <script src="js/main.js"></script>
</body>
</html>