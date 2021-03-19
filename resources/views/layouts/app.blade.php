<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trial</title>
        
        <!-- Fonts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success">
                <i class="fa fa-check"></i>
                {{ session('success') }}
            </div>
        @endif

        <div id="app">
            @yield('content')
        
        </div>
    </body>
    <script>
        const baseUrl = "{{ asset('/') }}";
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</html>