<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', "Doctor's Web Forum") }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- some custome style -->
    <style>
    .heading1{
        font-family: 'Lobster', cursive;
    }
    .normalTxt{
        font-family: 'Open Sans', sans-serif;
    }
    </style>

</head>
<body>
    <div id="app">
    <div class="container w-100 h-50 pb-3 position-relative" >
         
         <span class="float-right">
         <b>Total Users</b> <b>&rarr;</b>  
         <span class="badge badge-primary py-2 px-2">12</span>
         </span>         
         <span  class="pr-4 float-right">
         <b >Active Users</b> <b>&rarr;</b> 
         <span class="badge badge-success py-2 px-2">7</span>
         </span>
     </div>
        <nav class="navbar navbar-expand-md navbar-defalut bg-dark-gray shadow-none w-100">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                <div>
                <img src="/images/loader.gif" width="80" height="50" class="mr-3" style="border-right: 11px darkgray groove">
                </div>
                <div class="mt-2 h3 heading1"> Doctor's Web Forum
                </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                        <a href="" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                        <a href="" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
                        <a href="" class="nav-link">Forum</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="pb-4">
            @yield('content')
        </main>
    </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer>
        </script>
        <script >
        var links = document.querySelectorAll('.nav-link');
        

        links.forEach(function (item) {
            item.addEventListener('mouseover',function () {
            item.style.color = "red";
            },false),
        item.addEventListener('mouseout',function () {
            item.style.color = "royalblue";
            },false)
        })
        </script>
</body>
</html>
