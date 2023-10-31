<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HelpFlow</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Style -->
        <link rel="stylesheet" href="{{asset('css/general.css')}}">
        <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    </head>
    <body class="antialiased">
        <x-sidebar-component /> <!-- Menu -->

        <div class="content">
            @yield('content')
        </div>
    </body>
</html>
