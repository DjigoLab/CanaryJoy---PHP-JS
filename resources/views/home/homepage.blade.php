<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CanaryJoy - Erasmus & Travelling</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Tillana" rel="stylesheet"> 
    <!-- Scripts -->
    <script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
    <script src="{{asset('js/homeAnimation.js')}}"></script>

    </head>
    <body>
        <div class="columns">
            <div class="column column1">
                <h2 class="animated zoomIn">Travel</h2>
                <button class="gototravel"><i class="fas fa-angle-double-up animated infinite slideOutUp"></i></button>
            </div>
            <div class="column column2">
                <h2 class="animated zoomIn">Party</h2>
                <button class="gotoparty"><i class="fas fa-angle-double-up  animated infinite slideOutUp"></i></button>
            </div>
        </div>    
    </body>
</html>
