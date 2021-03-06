@extends('layouts.front')
@section('content')
<div class="container">  
    <h3 class="default-color text-center my-4">
        <b>{{$page->title}}</b>
        <hr class="hr-c">
    </h3>
    <div class="row">
        <div class="col-md-12">
                <aside>{!!$page->description!!}</aside>
                <script async defer 
                    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
        </div>
    </div>
</div>
@endsection