<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Inicio de sesión</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/main.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/dist/css/ionicons.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/iCheck/square/blue.css">
</head>
<body>
    
    @yield('content')

    <!-- jQuery 3.1.1 -->
    <script src="/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Script AjaxForms-->
    <script src="/js/AjaxForms.js"></script>
    <!-- Sweet Alert 2-->
    <script src="/js/sweetalert2.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/app.js"></script>
    <!-- Script main-->
    <script src="/js/main.js"></script>

</body>
</html>
