<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard App') }}</title>

    <!-- title icon -->
    <link rel="shortcut icon" href="{{ URL::to('images/logo-white.png') }}" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Waves Effect Css -->
    <link href="{{ URL::to('plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ URL::to('plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!--WaitMe Css-->
    <link href="{{ URL::to('plugins/waitme/waitMe.css') }}" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/materialize.css') }}">
    <link rel="stylesheet" href="{{ URL::to('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::to('plugins/bootstrap/css/bootstrap-theme.css') }}">

    <link rel="stylesheet" href="{{ URL::to('css/themes/all-themes.css') }}">

</head>

	@yield('content')

    @include('layouts.include.footer')


    <!-- Jquery Core Js -->
    <script src="{{ URL::to('plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ URL::to('js/admin.js') }}"></script>
    <script src="{{ URL::to('js/demo.js') }}"></script>
    <script src="{{ URL::to('js/script.js') }}"></script>
    <script src="{{ URL::to('js/helpers.js') }}"></script>
    <script src="{{ URL::to('plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ URL::to('plugins/node-waves/waves.js') }}"></script>

    <!-- Slimscroll Js -->
    <script src="{{ URL::to('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Validation Plugin Js -->
    <script src="{{ URL::to('plugins/jquery-validation/jquery.validate.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ URL::to('js/pages/examples/sign-in.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ URL::to('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Wait Me Plugin Js -->
    <script src="{{ URL::to('plugins/waitme/waitMe.js') }}"></script>

    <!-- Editable Table Plugin Js -->
    <script src="{{ URL::to('plugins/editable-table/mindmup-editabletable.js') }}"></script>
    <script src="{{ URL::to('js/pages/tables/editable-table.js') }}"></script>
</html>
