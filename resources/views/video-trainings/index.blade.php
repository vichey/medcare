@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-bold">
                    <i class="fa fa-align-justify"></i> Video Training List&nbsp;&nbsp;
                    <a href="{{url('/video-training/create')}}" class="btn btn-link btn-sm">New</a>
                </div>
                <div class="card-block">

                    <table class="tbl">
                        <thead>
                            <tr>
                                <th>&numero;</th>
                                <th>URL</th>
                                <th>Order</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach($video_trainings as $vid)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>
                                    ​<iframe width="250" src="{{$vid->url}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </td>
                                    <td>{{$vid->order_number}}</td>
                                    <td>
                                        <a class="btn btn-xs btn-primary" href="{{url('/video-training/edit/'.$vid->id)}}" title="Edit"><i class="fa fa-pencil"></i></a>
                                        <a class="btn btn-xs btn-danger" href="{{url('/video-training/delete/'.$vid->id)}}" onclick="return confirm('Do you want to delete?')" title="Delete"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table><br>
                    {{$video_trainings->links()}}
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
@endsection