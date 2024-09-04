<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    {{-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> --}}
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-straight/css/uicons-regular-straight.css'>
    {{-- <link rel="icon" href="{{ asset('../images/favicon.ico') }}"> --}}
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-straight/css/uicons-regular-straight.css'>

    <link rel="shortcut icon" href="../images/iman_logo.png" type="image/x-icon">

    <title>Iman Sport</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skin_color.css') }}">

    {{-- <style>
		.bd-example-row .row>.col, .bd-example-row .row>[class^=col-] {
			padding-top: .75rem;
			padding-bottom: .75rem;
			background-color: rgba(86,61,124,.15);
			border: 1px solid rgba(86,61,124,.2);
		}
		.bd-example-row .row+.row {
			margin-top: 1rem;
		}
	</style> --}}

</head>

<body>
    {{-- @include('sweetalert::alert') --}}


   
    @include('template.header')

    @include('template.sidebar')

    @yield('content')

    @include('template.footer')

    {{-- <script src="bootstrap/js/bootstrap.bundle.min.js"></script> --}}

    <script src="{{ asset('js/vendors.min.js') }}"></script>

    <script src="{{ asset('../assets/icons/feather-icons/feather.min.js') }}"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}"></script>
    <script src="{{ asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
    <script src="{{ asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>

    <!-- Sunny Admin App -->
    <script src="{{ asset('js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('js/pages/timeline.js') }}"></script>
    <script src="{{ asset('js/pages/component-animations-css3.js') }}"></script>

    <script src="{{ asset('../assets/vendor_components/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('js/pages/data-table.js') }}"></script>

    <script src="{{ asset('../assets/vendor_plugins/JqueryPrintArea/demo/jquery.PrintArea.js') }}"></script>
    <script src="{{ asset('js/pages/invoice.js') }}"></script>
    <script src="{{ asset('js/pages/component-animations-css3.js') }}"></script>

    <script src="{{ asset('js/template.js') }}"></script>
    <script src="{{ asset('js/pages/media.js') }}"></script>
    <script src="{{ asset('../assets/vendor_components/prism/prism.js') }}"></script>


</body>

</html>
