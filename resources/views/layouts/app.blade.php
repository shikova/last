<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}- @yield('title')</title>


    <!-- Styles -->

    {{ Html::style('css/app.css') }}
    {{ Html::style('css/font-awesome.css') }}

</head>
<body>
<div id="app">

    @include('partials.navbar')
    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
    @yield('js')

</body>
</html>
