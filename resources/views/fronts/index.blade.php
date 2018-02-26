@extends('layouts.front')
@section('content')
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