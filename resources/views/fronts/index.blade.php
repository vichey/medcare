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
    <hr class="hr-s"> 
    <div class="row">
        <div class="col-md-4 text-center">
            <a class="btn btn-s btn-danger btn-block" href="{{url('page/6')}}">
                សេវាទូទៅ
            </a>
        </div>
        <div class="col-md-4 text-center">
            <a class="btn btn-s btn-warning text-white btn-block" href="{{url('page/7')}}">
               សេវាពិនិត្យជំងឺ
            </a>
        </div>
        <div class="col-md-4 text-center">
            <a class="btn btn-s btn-success btn-block" href="{{url('page/8')}}">
               សេវាពិនិត្យសុខភាព
            </a>
        </div>
    </div>
    <hr class="hr-s"> 

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
            <h5 class="default-color">Latest Video  <a href="#" class="float-right">View All Video >></a></h5>
            <hr>
        </div>
    </div>
    <div class="row">
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
            <h5 class="default-color">Latest Audio  <a href="#" class="float-right">View All Audio >></a></h5>
            <hr>
        </div>
    </div>
    <div class="row">
        @foreach($audios as $aud)
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="h-100">
          ​      {{$aud->title}}
                <audio controls="">
                    <source src="{{asset('front/audios/'.$aud->file)}}" type="audio/ogg" width="80%">
                    <source src="{{asset('front/audios/'.$aud->file)}}" type="audio/mpeg" width="80%">
                </audio>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection