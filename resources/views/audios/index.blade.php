@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-bold">
                    <i class="fa fa-align-justify"></i> Audio List&nbsp;&nbsp;
                        <a href="{{url('/audio/create')}}" class="btn btn-link btn-sm">
                             New
                        </a>
                </div>
                <div class="card-block">
                    <table class="tbl">
                        <thead>
                            <tr>
                                <th>&numero;</th>
                                <th>Audio</th>
                                <th>Title</th>
                                <th>Order</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach($audios as $sli)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>
                                        <audio controls>
                                            <source src="{{asset('front/audios/'.$sli->file)}}" type="audio/ogg">
                                            <source src="{{asset('front/audios/'.$sli->file)}}" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td>{{$sli->title}}</td>
                                    <td>{{$sli->order}}</td>
                                    <td>
                                        <a class="btn btn-xs btn-primary"  href="{{url('/audio/edit/'.$sli->id)}}" title="Edit">Edit</a>
                                        <a class="btn btn-xs btn-danger"  href="{{url('/audio/delete/'.$sli->id)}}" title="Delete">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table><br>
                    {{$audios->links()}}
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
@endsection