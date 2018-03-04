@extends('layouts.front')
@section('content')   
<p><br></p>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p align="left" style="font-size: 26px;">
                    <b>{{$s->name}}</b>
                </p>
                @if($s->photo != null)
                    <img src="{{asset('front/img/'.$s->photo)}}" alt="" height="150">
                @else 
                    <img src="{{asset('front/img/default.png')}}" alt="" height="150">
                @endif
            </div>
            <div class="col-md-8" >
                <aside class="card-text" style="font-size: 27px;">{{$s->position}}</aside><hr>
                <p>{!!$s->description!!}</p>
            </div>
        </div>
    </div>
<p><br></p>
@endsection