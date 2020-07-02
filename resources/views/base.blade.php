<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel To Do App</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="{{ asset('js/manifest.js') }}" type="text/js"></script>
  <script src="{{ asset('js/vendor.js') }}" type="text/js"></script>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</head>
<body>
  <div class="container">
    @yield('main')
  </div>
</body>
</html>
