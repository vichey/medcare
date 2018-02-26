@extends('layouts.front')
@section('content')
<h5 class="default-color my-4">
    <b>News and Education</b>
    <hr>
</h5>
<div class="page-by-cat back">
    <div class="row">
        @foreach($posts as $p)
        <div class="col-md-3">
            <div class="card h-100 border-custom pd-0">
                <a href="{{url('news-and-education/detail/'.$p->id)}}">
                <img class="card-img-top" src="{{asset('uploads/posts/250x250/'.$p->feature_image)}}" width="100%"></a>
                <div class="card-body">
                    <h6><a style="text-decoration: none;" href="{{url('news-and-education/detail/'.$p->id)}}">{{$p->title}}</a></h6>
                    <aside><a style="text-decoration: none; color: #555;" href="{{url('news-and-education/detail/'.$p->id)}}">{{$p->short_description}}</a></aside>
                    <aside class="text-success date">
                        <small><img src="{{asset('front/img/date.png')}}" alt="date"> : {{$p->create_at}}</small>
                    </aside>
                </div>
            </div>
        </div>
        @endforeach 
    </div>
</div><br>
{{$posts->links()}}
@endsection