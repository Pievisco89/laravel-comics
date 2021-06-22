<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
        <title>Laravel-Comics</title>

    </head>
    <body>

        @include('partials.header')

        @yield('content')

        @include('partials.footer')

    </body>
</html>