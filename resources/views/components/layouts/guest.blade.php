
<!DOCTYPE html>
<html lang="es" data-topbar-color="dark">
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <script src="{{ url('assets/js/head.js') }}"></script>
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <link href="{{ url('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
  {{ $slot }}
<script src="{{ url('assets/js/vendor.min.js') }}"></script>
<script src="{{ url('assets/js/app.min.js') }}"></script>

</body>
</html>
