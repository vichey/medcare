<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="sor vichey" content="sor vichey">
        <title>Lysreyvyna Clinic</title>
        <link href="{{asset('front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('front/css/4-col-portfolio.css')}}" rel="stylesheet">
    </head>

    <body>
	<div class="container pd-20">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact">
                        <span class="icon">
                            <img src="{{asset('front/img/call.png')}}">
                        </span>
                    </div>
                    <div class="call">
                        (+855) 12 990 988, <br>
                        (+855) 99 990 988, <br>
                        (+855) 17 978 999
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="logo">
                        <a href="{{url('/')}}"><img src="{{asset('front/img/logo.jpg')}}" alt="logo" id="logo"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact">
                        <span class="icon">
                            <img src="{{asset('front/img/map.png')}}">
                        </span>
                    </div>
                    <div class="call">
                        #339A/B/C, St. 163, Sangkat Toul Tum Poung II, Khan Chamkarmorn,12311, 
                        Phnom Penh , Cambodia
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <center>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Facility</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('new-and-education')}}">News and Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('page/staff')}}">Doctor Background</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/page/about')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/page/contact')}}">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        All Service
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/page/6')}}">សេវាទូទៅ</a>
                        <a class="dropdown-item" href="{{url('/page/7')}}">សេវាពិនិត្យជំងឺ</a>
                        <a class="dropdown-item" href="{{url('/page/8')}}">សេវាពិនិត្យសុខភាព</a>
                    </div>
                </li>
            </ul>
            </center>
            </div>
	    </nav> 
    </div>
	
	
 
        @yield('content')
    <br>

    <footer>
         <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018 Lysreyvyna Clinic.</p>
        </div>
    </footer>
    <script src="{{asset('front/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    @yield('js')
</body>
</html>
