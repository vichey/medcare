@extends('layouts.front')
@section('content')

    <div id="demo" class="carousel slide" data-ride="carousel">
		<?php $i = 1;
            $slides = DB::table('slides')->orderBy('order', 'asc')->where('active',1)->get();
        ?>
        <div class="carousel-inner">
            @foreach($slides as $s)
                @if($i == 1)
                    <div class="carousel-item active">
                        <img src="{{asset('front/slides/'.$s->photo)}}" alt="{{$s->name}}" width="100%">
                        <div class="carousel-caption">
                            <p></p>
                            <aside><b>{{$s->name}}</b></aside>
                            <p>
                                <aside><a href="{{$s->url}}"><button class="btn btn-primary btn-c"><b>READ MORE</b></button></a></aside>

                            </p>
                        </div>  
                    </div>
                @else
                    <div class="carousel-item">
                        <img src="{{asset('front/slides/'.$s->photo)}}"   alt="{{$s->name}}"  width="100%">
                        <div class="carousel-caption">
                            <p></p>
                            <aside><b>{{$s->name}}</b></aside>
                            <p>
                                <aside><a href="{{$s->url}}"><button class="btn btn-primary btn-c"><b>READ MORE</b></button></a></aside>

                            </p>
                        </div>                        
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
                <div class="float-right ic"><img src="{{asset('front/img/u.png')}}" width="55"  style="opacity: 0.4;"></div>
                <?php $who_we_are = DB::table('pages')->where('id',1)->first();?>
                <h5>{{$who_we_are->title}}</h5>
                <p>{!!$who_we_are->description!!}</p>
            </div>
			<div class="col-md-4 background-c">
                <div class="float-right ic" ><img src="{{asset('front/img/w.png')}}" width="55" style="opacity: 0.5 ;"></div>
                <?php $comfortable_environment = DB::table('pages')->where('id',2)->first();?>
                <h5>{{$comfortable_environment->title}}</h5>
                <p>{!!$comfortable_environment->description!!}</p>
			</div>
			<div class="col-md-4 background-o">
			    <div class="float-right ic"><img src="{{asset('front/img/h.png')}}" width="55" style="opacity: 0.6;"></div>
			    <?php $opening_hours = DB::table('pages')->where('id',3)->first();?>
				<h5>{{$opening_hours->title}}</h5>
				<p>{!!$opening_hours->description!!}</p>
			</div>
		</div>
	</div>
    <div class="container">
    <p><br></p>
    <h3 align='center' class="text-warning">
        <b>All Service</b>  
    </h3>
    <hr> 
    <div class="row">
        <div class="col-md-4 text-center">
            <a class="btn btn-s btn-danger btn-block btn-flat" href="{{url('page/6')}}">
                <img src="{{asset('front/img/b.png')}}" alt="">
                សេវាទូទៅ
            </a>
        </div>
        <div class="col-md-4 text-center">
            <a class="btn btn-s btn-warning text-white btn-block btn-flat" href="{{url('page/7')}}">
                <img src="{{asset('front/img/c.png')}}" alt="">
               សេវាពិនិត្យជំងឺ
            </a>
        </div>
        <div class="col-md-4 text-center">
            <a class="btn btn-s btn-success btn-block btn-flat" href="{{url('page/8')}}">
            <img src="{{asset('front/img/a.png')}}" alt=""> 
            សេវាពិនិត្យសុខភាព
            </a>
        </div>
    </div>
    <hr> 

    <?php $staffs = DB::table('staffs')->orderBy('order', 'asc')->where('active', 1)->get(); ?>
    <p><br></p>
        <h3 align='center' class="text-info">
            <b>Our Doctors</b>  
        </h3>
        <hr class="hr-d"> 
    <p><br></p>
    <div class="row">
        @foreach($staffs as $s)
        <div class="col-md-3">
            <div class=" h-100 text-center">
                <a href="{{url('page/staff/detail/'.$s->id)}}">
                    @if($s->photo != null)
                        <img src="{{asset('front/img/'.$s->photo)}}" alt="" height="120" class="image-doctor"
                    @else 
                        <img src="{{asset('front/img/default.png')}}" alt="" height="120" class="image-doctor">
                    @endif
                </a>
                <p></p>
                <a href="{{url('page/staff/detail/'.$s->id)}}" class="staff-name" style="text-decoration:none;">
                    <aside class="card-title">
                        <b>{{$s->name}}</b>
                    </aside>
                    <aside class="card-text-c">{{$s->position}}</aside>
                </a>
            </div>
            <p><br></p>
        </div>
        @endforeach   
    </div>
    <?php 
        $video_trainings = DB::table('video_trainings')
            ->where('active',1)
            ->orderBy('order_number', 'asc')
            ->limit(4)
            ->get();
    ?>
    <div class="row">
        <div class="col-md-12 my-4">
            <h5 class="default-color">Latest Video  <a href="https://www.youtube.com/channel/UCuKpiFFMRySLxtreuMqcLdQ?disable_polymer=true" class="float-right">View All Video >></a></h5>
            <hr>
        </div>
    </div>
    <div class="row text-center">
        @foreach($video_trainings as $vid)
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="h-100">
          ​     <iframe width="250" src="{{$vid->url}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
        @endforeach
    </div>
    <?php 
        $audios = DB::table('audios')
            ->where('active',1)
            ->orderBy('order', 'asc')
            ->limit(4)
            ->get();
    ?>
    <div class="row">
        <div class="col-md-12 my-4">
            <h5 class="default-color">Latest Audio </h5>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="audo-box">
                @foreach($audios as $aud)
                    <p class="audo-item">
                        <h6>{{$aud->title}}</h6>
                        <audio controls>
                            <source src="{{asset('front/audios/'.$aud->file)}}" type="audio/ogg">
                            <source src="{{asset('front/audios/'.$aud->file)}}" type="audio/mpeg">
                        </audio>
                    </p>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>
<p></p>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<div class="container-fluit f">
<div class="container text-center">
    <div class="row">
        <div class="col-md-6">
        <div style="width: 100%">
    <div class="fb-page" data-href="" data-width="350"></div>
    <div class="fb-page"
    data-href="https://www.facebook.com/lsvclinic/" 
    data-width="350"
    data-hide-cover="false"
    data-show-facepile="true"></div>
  
        </div>
    </div>
    <div class="col-md-6 text-left">
        <div class="col-md-9 col-12">
    <form action="/action_page.php">
    <div class="form-group text-white">
      <label for="email"><b>Please write below and send us...</b></label>
      <input style="margin-bottom: 3px;" type="text" class="form-control form-control-sm"  placeholder="Your Name" id="name">
      <input style="margin-bottom: 3px;" type="email" class="form-control form-control-sm"   placeholder="Your Email" id="email">
      <input type="text" class="form-control form-control-sm"  placeholder="Subject" id="subject">
    </div>
    <div class="form-group">
        <textarea name="description" rows="5" id="description" placeholder="Write your message..." class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
  </form>
    </div>
    </div>
    </div>
</div>
</div>
    <div class="col-sm-12" style="padding:0px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.2200895199717!2d104.91185231541081!3d11.536063691808772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310950e70d4955af%3A0x12ba488a5ccfa943!2sLy+Srey+Vyna+International+Medical+Services!5e0!3m2!1sen!2skh!4v1520968016510" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
        {{--  <div id="map" style="width:100%;height:750px">
            <img src="{{asset('img/ajax-loader.gif')}}" alt="">
        </div>  --}}
    </div>
@endsection
@section('js')
{{--  <script>
    function initMap() {
        var myLatLng = {lat: 11.5360637, lng: 104.9118523};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }
</script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCF7yMA8-_MxooFoPfVvzuLGsN-Ppa4uR8&callback=initMap"></script>  --}}
@endsection