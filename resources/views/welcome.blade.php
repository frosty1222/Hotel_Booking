<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
        <title>Hotel Booking</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/home.css') }}">
        <link rel="stylesheet" href="{{ mix('css/responsive.css') }}">
        <link rel="stylesheet" href="{{mix('js/owlcarousel/assets/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{mix('js/owlcarousel/assets/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="https://path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
            rtl:true,
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                },
            }
        })
        });
        </script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .container {
             width: auto;
           }
        </style>
    </head>
    <body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="main-view">
                    <router-view></router-view>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/children.js') }}"></script>
    <script src="{{ mix('js/owlcarousel/owl.carousel.min.js')}}"></script>

  </script>
    </body>
</html>
