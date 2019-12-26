<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API - Yo Planifico</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="icon" type="image/x-icon" href="{{ secure_asset('images/favicon.ico') }}">
        <link href="{{ secure_asset('css/welcome.css') }}" rel='stylesheet'>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <!--<a href="{{ route('login') }}">Login</a>-->

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                  <img src="{{ secure_asset('images/logocentinela.png') }}"  class="centinela-img">
                  <img src="{{ secure_asset('images/yoplanifico.png') }}"  class="yoplanifico-img">
            </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://yoplanifico.cl">Geosam</a>
                    <a href="http://www.aminerals.cl/">Antofasta Minerals</a>
                    <a href="https://www.plazfer.cl/">Plazfer Spa</a>
                    <a href="https://github.com/plazfer">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
