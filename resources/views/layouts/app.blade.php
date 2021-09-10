<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="bg-brand-lightest font-sans font-normal h-screen w-screen">
<div id="app">
    @include('layouts.partials._nav')
    @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
