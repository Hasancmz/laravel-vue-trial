<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trial</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <header-side></header-side>
            ANA SAYFA
            <br><br><br>
            <router-link to='/'>Home</router-link>
            <router-link to='/about'>POST</router-link>
            <router-view></router-view>
            
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
