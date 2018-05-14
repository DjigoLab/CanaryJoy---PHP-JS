<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/list.css')}}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon|Montserrat" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="{{asset('js/forms.js')}}"></script>
    <script src="{{asset('js/place.js')}}"></script>
    <script src="{{asset('js/searchbar.js')}}"></script>
    <script src="{{asset('js/swapfx.js')}}"></script>
</head>
<div class="swap-splash animated light">
    <div class="titles">
<h2>Canary</h2>
<h3>Joy</h3>
<h4>Erasmus & Traveling</h4></div></div>

<body class="body-bg" style="background:url({{$bg}} ">
    <nav class="menu">
        <a href="{{$swap}}"> <button class="swap"><i class="fas fa-exchange-alt"></i></button></a>
        <h3 class="title">{{$title}}</h3>
        <a> 
                @guest
                <p class="username"> Register </p> 

                @else
                <p class="username"> {{ Auth::user()->name }}</p> 
                @endguest

                <button class="user"><i class="fas fa-user"></i></button></a>
    </nav>
    <div class="parentDisable animated"></div>
    @include('places.searchbar')

    <div class="list-wrapper">
    @include('places.places')
    @include('places.place')
    </div>
    <div class="user-form animated">
    @include('auth.register')
    </div>
</body>


<script>
    navigator.serviceWorker.getRegistrations().then(function(registrations) {
 for(let registration of registrations) {
  registration.unregister()
} })
</script>

</html>