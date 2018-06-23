<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/materialize.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
        <link rel="stylesheet" href="{{ URL::to('plugins/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ URL::to('plugins/bootstrap/css/bootstrap-theme.css') }}">

    </head>
    <body>
        <div class="center">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title">
                    Dashboard App
                </div>
            </div>
        </div>

        <script src="{{ URL::to('js/admin.js') }}"></script>
        <script src="{{ URL::to('js/demo.js') }}"></script>
        <script src="{{ URL::to('js/script.js') }}"></script>
        <script src="{{ URL::to('js/helpers.js') }}"></script>
        <script src="{{ URL::to('plugins/bootstrap/js/bootstrap.js') }}"></script>

    </body>
</html>
