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
            <ul class="navbar-nav text-center">
                <li class="nav-item active">
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
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </li>
            </ul>
	    </nav> 
    </div>
	
	<div id="demo" class="carousel slide" data-ride="carousel">
		<?php $i = 1;
            $slides = DB::table('slides')->orderBy('order', 'asc')->where('active',1)->get();
        ?>
        <div class="carousel-inner">
            @foreach($slides as $s)
                @if($i == 1)
                    <div class="carousel-item active">
                        <img src="{{asset('front/slides/'.$s->photo)}}" alt="{{$s->name}}" width="100%">
                    </div>
                @else
                    <div class="carousel-item">
                        <img src="{{asset('front/slides/'.$s->photo)}}"   alt="{{$s->name}}"  width="100%">
                    </div>
                @endif
                <?php $i++; ?>
            @endforeach
	    </div>
	    <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
		</a>
	</div>

	<div class="col-md-12">
		<div class="row">
			<div class="col-md-4 background-w">	
                <div class="float-right"><img src="{{asset('front/img/u.png')}}" width="48"  style="opacity: 0.6;"></div>
                <?php $who_we_are = DB::table('pages')->where('id',1)->first();?>
                <h5>{{$who_we_are->title}}</h5>
                <p>{!!$who_we_are->description!!}</p>
            </div>
			<div class="col-md-4 background-c">
                <div class="float-right"><img src="{{asset('front/img/w.png')}}" width="50" style="opacity: 0.6;"></div>
                <?php $comfortable_environment = DB::table('pages')->where('id',2)->first();?>
                <h5>{{$comfortable_environment->title}}</h5>
                <p>{!!$comfortable_environment->description!!}</p>
			</div>
			<div class="col-md-4 background-o">
			    <div class="float-right"><img src="{{asset('front/img/h.png')}}"  style="opacity: 0.6;"></div>
			    <?php $opening_hours = DB::table('pages')->where('id',3)->first();?>
				<h5>{{$opening_hours->title}}</h5>
				<p>{!!$opening_hours->description!!}</p>
			</div>
		</div>
	</div>

    <div class="container">
        @yield('content')
    </div><br>

    <footer>
         <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018 Lysreyvyna Clinic.</p>
            <aside class="text-white text-center">Power by <a class="text-white" href="http://vdoo.biz/">Vdoo Solutions</a></aside>
        </div>
    </footer>
    <script src="{{asset('front/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
