@extends('layouts.front')
@section('content')
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
                        <img src="{{asset('front/img/'.$s->photo)}}" alt="" height="120">
                    @else 
                        <img src="{{asset('front/img/default.png')}}" alt="" height="120">
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
@endsection