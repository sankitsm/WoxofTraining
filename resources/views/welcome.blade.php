<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
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
                right: 10px;
                top: 46px;
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
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .top-left{
               position:absolute;
               left:10px;
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
          
            p{
               width: 79%;
            }
            .row{
               margin-left: 35px !important;
            }
            .bannerContent{
                margin-left: 35px !important;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref">
            @if (Route::has('login'))
              <div class="header">
                <div class="wrapper">
                    <div class="top-left links">
                         @auth
                         @else
                         <a class="titleStyles" href="{{ url('/') }}">Lorem</a>
                         <img class="sup_img_class" src="{{ asset('images/logo.png') }}" />	
                         @endauth
                    </div>
                    <div class="top-right links">
                         @auth
                         @else
                         <a href="{{ route('login') }}">Login</a>
                         <a href="{{ route('register') }}">Register</a>
                         @endauth
                   </div>
                  </div>  
               </div> 
              
            @endif
           
         
            @yield('content')
      
         
           
        </div>
    </body>
</html>
 