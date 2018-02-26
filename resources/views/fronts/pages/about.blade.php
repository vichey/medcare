@extends('layouts.front')
@section('content')
<h5 class="default-color my-4">
<b>{{$about->title}}</b>
<hr>
</h5>
<div class="page-by-cat back">
    <div class="row">
        <div class="col-md-12">
            <div class="border-custom">
                <aside>{!!$about->description!!}</aside>
            </div>
        </div>
    </div>
</div>
@endsection