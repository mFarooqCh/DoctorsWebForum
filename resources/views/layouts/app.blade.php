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
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
    <div class="container w-100 h-50 pb-3 bg-light position-relative" >
         
         <span class="float-right">
         <b>Total Users</b> <b>&rarr;</b>  
         <span class="badge badge-primary py-2 px-2">12</span>
         </span>         
         <span  class="pr-4 float-right">
         <b >Active Users</b> <b>&rarr;</b> 
         <span class="badge badge-success py-2 px-2">7</span>
         </span>
     </div>
        <nav class="navbar navbar-expand-md navbar-defalut sticky-top bg-light shadow-none w-100">
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
                        <a href="" class="nav-link onHover">About</a>
                        </li>
                        <li class="nav-item">
                        <a href="/contact" class="nav-link onHover">Contact</a>
                        </li>
                        <li class="nav-item">
                        <a href="" class="nav-link onHover">Forum</a>
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
        <footer class="container-fluid row px-5 pt-5 pb-2 bg-light">
        <div class="col-md-4">
        <div class="row d-felx flex-column">
        <div class="row">
        <div class="col-md-3">
        <img src="/images/loader.gif" alt="DWF logo" width="100" height="70">
        </div>
        <div class="col-md-9 mt-2 h2 heading1 ">
        <a href="/home" class="text-decoration-none">Doctor's Web Forum</a>
        </div>
        </div>
        <p class="py-3">
        We aims to help the world proactively manage its healthcare, supplying evidence-based information on a wide range of medical and health topics to patients and health professionals.
        </p>
        </div>
        </div>
        <div class="col-md-4 ">
        <div class="col-md-9 text-center mt-2 h3 heading1 text-capitalize  rounded-circle"  style="border-bottom: 1px groove red ">
         Site Map
        </div>
        <ul class="list-unstyled ml-5 py-4">
        <li class="ml-4"><a href="#" class="text-decoration-none onHover">About us</a></li>
        <li class="ml-4"><a href="#" class="text-decoration-none onHover">Ask a question</a></li>
        <li class="ml-4"><a href="#" class="text-decoration-none onHover">Book Appointment</a></li>
        <li class="ml-4"><a href="#" class="text-decoration-none onHover">Contact us</a></li>
        <li class="ml-4"><a href="#" class="text-decoration-none onHover">Forum</a></li>

        </ul>
        </div>
        <div class="col-md-4">
        <div class="col-md-9 text-center mt-2 h3 heading1 text-capitalize rounded-circle " style="border-bottom: 1px groove red ">
         Social media Links
        </div>
        <ul class="list-unstyled ml-5 py-4 row text-center">
        <li><a target="_blank" href="https://facebook.com"  class="onHover px-3"> <i class="fab fa-facebook" aria-hidden="true"></i> </a></li>
        <li><a target="_blank" href="https://twitter.com" class="onHover px-3"> <i class="fab fa-twitter" aria-hidden="true"></i> </a></li>
        <li><a target="_blank" href="https://instagram.com" class="onHover px-3"> <i class="fab fa-instagram" aria-hidden="true"></i>  </a></li>
        <li><a target="_blank" href="https://github.com" class="onHover px-3"> <i class="fab fa-github" aria-hidden="true"></i> </a></li>
        <li><a target="_blank" href="https://linkedin.com" class="onHover px-3"> <i class="fab fa-linkedin" aria-hidden="true"></i> </a></li>
        </ul>
        </div>
        <hr>
        <section class="container-fluid bg-light text-primary text-capitalize py-3 rounded">
    <div class="container text-center">
    &copy; 2020 all rights reserved. <strong class="onHover">M_F_CH</strong>
    </div>

        </section>
        </footer>
    </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer>
        </script>
        <script >
        var links = document.querySelectorAll('.onHover');
        

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
