<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Favicon-->
        <link rel="shortcut icon" type="image/png" href="{{ Vite::asset('resources/img/laravel.png') }}">

        <title>Laravel - Vite - Sass | Template </title>

        <!--Vite-->
        @vite('resources/js/app.js')
        
    </head>
    <body class="d-flex jc-center ai-center">
       
        @yield('content')

    </body>
</html>