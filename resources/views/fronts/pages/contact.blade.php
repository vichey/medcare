@extends('layouts.front')
@section('content')   
<h5 class="default-color my-4">
<b>{{$contact->title}}</b>
<hr>
</h5>
<div class="page-by-cat back">
    <div class="row">
        <div class="col-md-12">
            <div class="border-custom">
                <aside>{!!$contact->description!!}</aside>
                <script async defer 
					src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
            </div>
        </div>
    </div>
</div>
@endsection