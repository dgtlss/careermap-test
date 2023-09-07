<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Careermap Job Board Test</title>
        <link rel="shortcut icon" href="/img/favicon.png" type="image/png">
        <link rel="stylesheet" href="/css/tailwind.css">
        {!! cooker_resource('app.css') !!}
    </head>
    <body class="antialiased">
        @yield('content')
        {!! cooker_resource('app.js') !!}
    </body>
</html>
