<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Beach Resorts')</title>

    @vite('resources/js/app.js')
    @yield('custom-stylesheets')
    @yield('custom-scripts-head')
</head>
<body class='bg-website'>
    @include('partials.header')

    <main>
        @yield('main-content')
    </main>

    @include('partials.footer')
    @yield('custom-scripts-tail')
</body>
</html>