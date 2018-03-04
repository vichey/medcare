@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-bold">
                    <i class="fa fa-align-justify"></i> Staff List&nbsp;&nbsp;
                    <a href="{{url('/staff/create')}}" class="btn btn-link btn-sm">
                        New
                    </a>
                </div>
                <div class="card-block">

                    <table class="tbl">
                        <thead>
                            <tr>
                                <th>&numero;</th>
                                <th>photo</th>
                                <th>name</th>
                                <th>position</th>
                                <th>order</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach($staffs as $s)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td> @if($s->photo != null)
                                        <img src="{{asset('front/img/'.$s->photo)}}" id="img" width="100"/>
                                        @else
                                        <img src="{{asset('front/img/default.png')}}" id="img" width="100"/>
                                        @endif
                                    </td>
                                    <td>{{$s->name}}</td>
                                    <td>{{$s->position}}</td>
                                    <td>{{$s->order}}</td>
                                    <td>
                                        <a href="{{url('/staff/view/'.$s->id)}}" title="view"><i class="fa fa-eye text-info"></i></a>&nbsp;&nbsp;
                                        <a href="{{url('/staff/edit/'.$s->id)}}" title="Edit"><i class="fa fa-edit text-success"></i></a>&nbsp;&nbsp;
                                       <a href="{{url('/staff/delete/'.$s->id)}}" onclick="return confirm('Do you want to delete?')" title="Delete"><i class="fa fa-remove text-danger"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table><br>
                    {{ $staffs->links() }}
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
@endsection