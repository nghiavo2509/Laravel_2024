<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
        <link rel="stylesheet" href="{{ asset('css/frontend/main.css') }}">
        
    </head>
    <body id="root">
        <div class="wrapper">
            <div class="head">
                @include('components/nav-bar')
                @include('components/search')
            </div>
            <div class="main">
                <div class="contain">
                    @include('frontend/home')
                </div>
            </div>
        </div>
    </body>
</html>
