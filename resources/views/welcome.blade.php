<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trial</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            .header {
                text-align: center;
                font-size: 20px
            }
        </style>
    </head>
    <body>
        <div class="header">Ben Welcome Sayfasıyım</div>
        <a href="{{ route('post') }}">POST</a>

    </body>
</html>
