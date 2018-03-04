@extends('layouts.front')
@section('content')
<h3 class="default-color text-center my-4">
    <b>{{$about->title}}</b>
    <hr class="hr-c">
</h3>
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