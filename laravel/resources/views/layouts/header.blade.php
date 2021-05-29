<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        @include('layouts.meta')
    </head>
    <body>

        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
          <h5 class="my-0 mr-md-auto font-weight-normal"><a class="p-2 text-dark" href="/">Company name</a></h5>
          <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="/companies">Companies</a>
            <a class="p-2 text-dark" href="/trainers">Trainers</a>
            <a class="p-2 text-dark" href="/search">Search</a>
          </nav>

        </div>
