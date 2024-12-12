<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title', 'Lan-Mar')</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        {{ $slot }}

        <script>
            const menuToggle = document.getElementById('menu-toggle');
            const menu = document.getElementById('menu');
            const userMenuButton = document.getElementById('user-menu-button');
            const dropdown = document.getElementById('dropdown');
        
            menuToggle.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        
            userMenuButton.addEventListener('click', () => {
                dropdown.classList.toggle('hidden');
            });
        
            document.addEventListener('click', (event) => {
                if (!userMenuButton.contains(event.target) && !dropdown.contains(event.target)) {
                    dropdown.classList.add('hidden');
                }
            });
        </script>
    </body>
</html>
