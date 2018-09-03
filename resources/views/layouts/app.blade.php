<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Lorem') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
         <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: -80px;
                top: 31px;
            }

            .content {
                text-align: center;
                margin-top: 5%;
                text-align: justify;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
               
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .top-left{
               position:absolute;
               left:-132px;
               top:18px;
            }
            .titleStyles{
                font-size: 16px !important;
               
                
            }
            .links > .titleStyles{
                padding: 0 2px;
            }
            .header{
               height: 102px;
               background-color: #5c6e80;
            }
            .wrapper{
              max-width: 1024px;
              margin: 0px auto;
             
            }
            
            .banner{
               height: 400px;
               background-image:url({{url('images/banner.jpg')}});
               background-repeat: no-repeat;
               background-size: 1450px 700px;
               color: #fff;
            }
            .bannerLogin{
               height: 400px;
               background-image:url({{url('images/banner.jpg')}});
               background-repeat: no-repeat;
               background-size: 1450px 700px;
              //-moz-transform: scaleX(-1);
              //-o-transform: scaleX(-1);
             // -webkit-transform: scaleX(-1);
             // -ms-transform: scaleX(-1);
             // transform: scaleX(-1);
             // -ms-filter: "FlipH";
             // filter: FlipH;
            }
            .bannerHome{
                height: 123px;
               background-image:url({{url('images/banner.jpg')}});
               background-repeat: no-repeat;
               background-size: 1450px 700px;
              -moz-transform: scaleX(-1);
              -o-transform: scaleX(-1);
              -webkit-transform: scaleX(-1);
              -ms-transform: scaleX(-1);
              transform: scaleX(-1);
              -ms-filter: "FlipH";
              filter: FlipH;
            }
            p{
               width: 79%;
            }
            .row{
               margin-left: 35px !important;
            }
            .bannerContent{
                margin-left: 35px !important;
            }
            .nav-link{
              color: #fff !important;
            }
            .bannerContent{
               position: relative;
               top: 4%;
            }
            
            .container {
                    max-width: 100% !important;
                    padding-right: 0px !important;
                    padding-left: 0px !important;
                    margin-top: 5% !important;
            }
             .loginStyle{
                   position: relative;
                   top: 87px;
              }
              .containerHome {
                    max-width: 100% !important;
                    padding-right: 0px !important;
                    padding-left: 0px !important;
                   
               }
               .form-control{
                 background-color: hsla(207, 64%, 86%, 0.5) !important;
               }
               .table {
                 width: 65% !important;
                 max-width: 100%;
                 margin-bottom: 1rem;
                 background-color: transparent;
                 margin-left: 20% !important;
               }
        </style>
</head>
<body>
    <div id="app">
        <div class="header">
              <div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
              <div class="top-left links">
                <a class="titleStyles" href="{{ url('/') }}">
                    Lorem
                </a>
                 <img class="sup_img_class" src="{{ asset('images/logo.png') }}" />
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
               </div> 
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <div class="top-right links">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                
                            </li>
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
            </div>
        </nav>
    </div>
    </div>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
