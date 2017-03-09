<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('css/waves.min.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" />
	
	<!-- Datepicker material Css -->
    <link href="{{ asset('css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />
	
	<!-- Bootstrap Select Css -->
    <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('css/theme-red.css') }}" rel="stylesheet" />
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="@yield('body-class')">

        @yield('content')

	
	  <!-- Jquery Core Js -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('js/waves.min.js') }}"></script>
	
	<!-- Autosize Plugin Js -->
    <script src="{{ asset('js/autosize.min.js') }}"></script>
	    <!-- Moment Plugin Js -->
    <script src="{{ asset('js/moment.js') }}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{ asset('js/bootstrap-material-datetimepicker.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('js/admin.js') }}"></script>
	<script src="{{ asset('js/basic-form-elements.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ asset('js/demo.js') }}"></script>
</body>
</html>
