<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Product Management - AI</title>
        <link rel="shortcut icon" href="{{ asset('image/fav.png') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <!-- External CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
        <link href="{{ asset('css/content.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bg.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{!! asset('/js/bg.js') !!}"></script>

        <!-- Styles -->
        <style>
                 
        </style>

    </head>
    <body class="antialiased">

        <div class="hero">
            <div class="diagonal-hero-bg">
                <div class="stars">
                    <div class="small"></div>
                    <div class="medium"></div>
                    <div class="big"></div>
                </div>
            </div>
            <div class="bg">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        </div>

        <div class="containers">
            <section class="c-parrallax--container">
                <div data-speed="5" class="c-parrallax--item c-parrallax--item_1"></div>
                <div data-speed="4" class="c-parrallax--item c-parrallax--item_2"></div>
                <div data-speed="3" class="c-parrallax--item c-parrallax--item_3"></div>
                <div data-speed="2" class="c-parrallax--item c-parrallax--item_4"></div>
                <div data-speed="1" class="c-parrallax--item c-parrallax--item_5"></div>

                <div class="container">
                        <div class="property is-animated">
                            <span>Product </span>
                            <span>Management </span>
                        </div>
                        <div class="value is-animated">
                            <span> AI</span>
                        </div>
                </div>

                <div id="app">
                    <div class="title">
                        <div class="title-inner">
                        <div class="cafe">
                            <div class="cafe-inner">Image Generation </div>
                        </div>
                        <div class="mozart">
                            <div class="mozart-inner">Using AI</div>
                        </div>
                        </div>
                    </div>

                    <div class="image">
                        <img src="{{ asset('image/image-1.jpg') }}" alt='Image-1'>
                    </div>
                </div>


            </section>

        </div>


        <script src="https://codepen.io/shshaw/pen/QmZYMG.js"></script>
    </body>
</html>
