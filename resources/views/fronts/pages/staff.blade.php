@extends('layouts.front')
@section('content')   
<h3 class="default-color text-center my-4">
    <b>Dotor Background</b>
    <hr class="hr-c">
</h3>
<?php $staffs = DB::table('staffs')->orderBy('order', 'asc')->where('active', 1)->get(); ?>
<p></p>
<div class="row">
    @foreach($staffs as $s)
    <div class="col-md-3">
        <div class=" h-100 text-center">
            <a href="{{url('page/staff/detail/'.$s->id)}}">
                @if($s->photo != null)
                    <img src="{{asset('front/img/'.$s->photo)}}" alt="" height="120">
                @else 
                    <img src="{{asset('front/img/default.png')}}" alt="" height="120">
                @endif
            </a>
            <p></p>
            <a href="{{url('page/staff/detail/'.$s->id)}}" class="staff-name" style="text-decoration:none;">
                <aside class="card-title">
                    <b>{{$s->name}}</b>
                </aside>
                <aside class="card-text-c">{{$s->position}}</aside>
            </a>
        </div>
        <p><br></p>
    </div>
    @endforeach   
</div>
@endsection