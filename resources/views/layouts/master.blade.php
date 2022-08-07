<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- Vite resources --}}
    @vite(['resources/assets/sass/app.scss'])
</head>
<body>
@yield('content')
{{-- Vite resources --}}
@vite(['resources/assets/js/app.js'])
</body>
</html>
