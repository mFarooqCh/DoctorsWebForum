<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title') -Doctor's Web Forum</title>
        <!-- Links to style and JS sheets -->
        <link rel="stylesheet" href="{{'../css/app.css'}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        .mainDiv > .bg_img{
            height: 800px;
            width: 100%;
            position: fixed;
            z-index: -1;
            opacity:0.05;
        }
        body{
            font-family: 'Nunito', sans-serif;
        }
        .navText{
        font-size:21px;
        }
        .navText:Hover{
            text-decoration: underline;
        }
        .SecondSec{
            background-image: url('');
        }
        </style>
    </head>
    <body>
    <div class="container pt-3" style="text-align: right">
        <b>Total Users</b> <b>&rarr;</b> 
        <div class="badge badge-primary " >
            12
        </div>         
        <b class="pl-4">Active Users</b> <b>&rarr;</b> 
        <div class="badge badge-success">
           7
        </div>&nbsp;&nbsp;
    </div>
    <nav class="navbar navbar-expand-lg navbar-default sticky-top px-5">
        <a class="navbar-brand"><img src="../images/loader.gif" width="100" height="80" alt=""></a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-primary text-white"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link navText" href="#">Welcome <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navText" href="#">About</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-info mr-sm-2 navText" type="submit" >Register</button>
      <button class="btn btn-outline-success my-2 my-sm-0 navText" type="submit">Login</button>
        </form>
        </div>
    </nav>
    <div class="mainDiv">
    <img src="../images/red_cross.png" class="bg_img" alt="">
    <div class="container-fluid SecondSec">
    
    </div>
    @yield('content')
    </div>

    <script src="{{'../js/app.js'}}"></script>
    
    </body>
</html>
