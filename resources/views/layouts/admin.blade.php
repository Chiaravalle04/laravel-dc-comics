<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Favicon-->
        <link rel="shortcut icon" type="image/png" href="{{ Vite::asset('resources/img/logo.png') }}">

        <!--Fontawesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>DC Comics</title>

        <!--Vue.js-->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <!--Vite-->
        @vite('resources/js/app.js')
        
    </head>
    <body>

        <main>

            @yield('content-admin')

        </main>

    </body>
</html>