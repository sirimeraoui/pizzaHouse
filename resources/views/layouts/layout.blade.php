<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Welcome to Pizza House</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{asset('css/main.css')}}" rel="stylesheet"  type="text/css">


    </head>
    <body class="antialiased">
@yield('content')
<footer>Cpyright 2022 Pizza House</footer>
    </body>
</html>