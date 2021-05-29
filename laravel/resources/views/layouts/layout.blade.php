<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        @include('layouts.meta')
    </head>
    <body>
        @include('layouts.header')
         @yield('content');
         @include('layouts.footer')
    </body>

</html>

