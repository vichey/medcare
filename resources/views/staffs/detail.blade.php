@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-bold">
                    <i class="fa fa-align-justify"></i> View Staff&nbsp;&nbsp;
                    <a href="{{url('/staff')}}" class="btn btn-link btn-sm">Back To List</a>
                </div>
                <div class="card-block">
                    <form 
                    >
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="name" class="control-label col-lg-6 col-sm-6">
                            	<p class="text-primary">Name</p>
                                <p>{{$staff->name}}</p>
                            </label>
                            <label for="name" class="control-label col-lg-6 col-sm-6">
                            	<p class="text-primary">Photo</p>
                                @if($staff->photo != null)
                                <img src="{{asset('front/img/'.$staff->photo)}}" id="img" width="150"/>
                                @else
                                <img src="{{asset('front/img/default.png')}}" id="img" width="150"/>
                                @endif
                            </label>
                        </div>
                        <div class="form-group row">
                            <label for="url" class="control-label col-lg-12 col-sm-12">
                                <p class="text-primary">URL</p>
                                <p>{{$staff->url}}</p>
                            </label>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="control-label col-lg-12 col-sm-12">
                                <p class="text-primary">Description</p>
                                <p>{!!$staff->description!!}</p>
                            </label>
                        </div>       
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection