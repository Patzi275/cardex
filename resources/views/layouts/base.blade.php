
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/splide.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('css/cardex.css') }}">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
  <link rel="apple-touch-icon" href="icon/favicon-32x32.png">
  <title>Cardex – @yield('title')</title>

</head>
<body>
  @yield('body')

  <!-- JS -->
  @yield('script')
  <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/splide.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/select2.min.js') }}"></script>
  <script src="{{ asset('js/smooth-scrollbar.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>