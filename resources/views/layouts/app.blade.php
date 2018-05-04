<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
</head>
<body>
    <div id="app">
      @guest
      <main class="py-4">
            @yield('content')
        </main>
        <div class="already">  <p>Already registered? <a class="nav-link" href="{{ route('login') }}"> {{ __('Login') }}</a></p></div>

      @else
      <span class="caret">You are </span> <a href="#" role="button" >
            {{ Auth::user()->name }}
        </a><i class="fas fa-user"></i>
        <div>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
      @endguest
            </div>

      
    </div>
</body>
</html>
