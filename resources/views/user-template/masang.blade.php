<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>Iman Sport</title>

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel="shortcut icon" href="../images/iman_logo.png" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('tmpt/css/bootstrap.min.css') }}">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{ asset('tmpt/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('tmpt/css/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('tmpt/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('tmpt/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('tmpt/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('tmpt/css/rateit.css') }}">
    <link rel="stylesheet" href="{{ asset('tmpt/css/bootstrap-select.min.css') }}">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{ asset('tmpt/css/font-awesome.css') }}">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
</head>

<body class="cnt-home">
    @include('sweetalert::alert')
    @include('user-template.navbar')
    @yield('konten')
    {{-- @yield('chart') --}}
    @include('user-template.footer')

    <script src="tmpt/js/jquery-1.11.1.min.js"></script>
    <script src="tmpt/js/bootstrap.min.js"></script>
    <script src="tmpt/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="tmpt/js/owl.carousel.min.js"></script>
    <script src="tmpt/js/echo.min.js"></script>
    <script src="tmpt/js/jquery.easing-1.3.min.js"></script>
    <script src="tmpt/js/bootstrap-slider.min.js"></script> `
    <script src="tmpt/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="tmpt/js/lightbox.min.js"></script>
    <script src="tmpt/js/bootstrap-select.min.js"></script>
    <script src="tmpt/js/wow.min.js"></script>
    <script src="tmpt/js/scripts.js"></script>
</body>

</html>
