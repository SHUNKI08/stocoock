<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="https:/fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- CSS , Java Script -->
        <link href="/css/layout.css" rel="stylesheet">
        <script src="js/main.js"></script>        
    </head>
    <body>
        
        <!--Navigation Bar-->
        <header>
            @include('header')
        </header>
        
        <div class="container">
            @yield('content')
        </div>
        
        <div class="footer">
            @include('footer')
        </div>
        
    </body>
</html>