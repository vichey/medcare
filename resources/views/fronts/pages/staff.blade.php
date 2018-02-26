@extends('layouts.front')
@section('content')   
<h5 class="default-color my-4">
<b>Doctor Background</b>
<hr>
</h5>
<div class="page-by-cat back">
    <div class="col-md-12">
    <div class="row">
        @foreach($staffs as $s)
        <div class="col-md-6 pd-0">
            <div class="card-header card-header-c border none-radius">
                <div class="text-white text-center">{!!$s->name!!} <b>({{$s->position}})</b></div>
            </div>
            <div class="card-body border h-100">
                <div class="text-center">
                    @if($s->photo != null)
                    <img src="{{asset('front/img/'.$s->photo)}}" width="102">
                    @else 
                    <img src="{{asset('front/img/default.png')}}" width="102">
                    @endif
                </div>
                <p> {!!$s->description!!}</p>
            </div>
            <br>
        </div>
        @endforeach
    </div>
    </div>
</div><br><br><br>
@endsection