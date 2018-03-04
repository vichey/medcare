@extends('layouts.front')
@section('content')
<div class="container">
    <h3 class="default-color text-center my-4">
        <b>{{$about->title}}</b>
        <hr class="hr-c">
    </h3>
    <div class="row">
        <div class="col-md-12">
            <aside>{!!$about->description!!}</aside>
        </div>
    </div>
</div>
@endsection