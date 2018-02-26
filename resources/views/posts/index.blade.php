@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-bold">
                    <i class="fa fa-align-justify"></i> Post List&nbsp;&nbsp;
                    <a href="{{url('/post/create/new')}}" class="btn btn-link btn-sm">
                        New
                    </a>
                </div>
                <div class="card-block" style="padding: 0;">
                    <table class="table table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Creator</th>
                                <th>Creation Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach($posts as $p)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><a href="{{url('/post/view/'.$p->id)}}" title="Edit">{{$p->title}}</a></td>
                                    <td>{{$p->create_by}}</td>
                                    <td>{{$p->create_at}}</td>
                                    <td>
                                        <a href="{{url('/post/edit/'.$p->id)}}" title="Edit">Edit</a> | 
                                        
                                       <a href="{{url('/post/delete/'.$p->id)}}" onclick="return confirm('Do you want to delete?')" title="Delete">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table><br>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
@endsection