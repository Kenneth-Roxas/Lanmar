<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @livewireStyles
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title', 'Lan-Mar')</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        @livewireScripts
        {{ $slot }}
    </body>
</html>
