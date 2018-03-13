@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-bold">
                    <i class="fa fa-align-justify"></i> Edit Staff&nbsp;&nbsp;
                    <a href="{{url('/staff')}}" class="btn btn-link btn-sm">Back To List</a>
                </div>
                <div class="card-block">
                    @if(Session::has('sms'))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div>
                                {{session('sms')}}
                            </div>
                        </div>
                    @endif
                    @if(Session::has('sms1'))
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div>
                                {{session('sms1')}}
                            </div>
                        </div>
                    @endif

                    <form 
                    	action="{{url('/staff/update')}}" 
                    	class="form-horizontal" 
                        method="post"
                        enctype="multipart/form-data"  
                    >
                        {{csrf_field()}}
                        <input type="hidden" value="{{$staff->id}}" name="id" id="id">
                        <div class="form-group row">
                            <label for="name" class="control-label col-lg-2 col-sm-2">
                            	Name <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6 col-sm-8">
                                <input type="text" required autofocus name="name" id="name" class="form-control" value="{{$staff->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="position" class="control-label col-lg-2 col-sm-2">
                            	Position <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6 col-sm-8">
                                <input type="text" required name="position" id="position" class="form-control" value="{{$staff->position}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="order" class="control-label col-lg-2 col-sm-2">
                            	Order
                            </label>
                            <div class="col-lg-6 col-sm-8">
                                <input type="number" name="order" id="order" class="form-control" value="{{$staff->order}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="photo" class="control-label col-lg-2 col-sm-2">Photo <span class="text-danger">(115 x 120)</span></label>
                            <div class="col-lg-6 col-sm-8">
                                <input type="file" name="photo" id="photo" accept="image/*" onchange="loadFile(event)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="photo" class="control-label col-lg-2 col-sm-2"> </label>
                            <div class="col-lg-6 col-sm-8">
                                @if($staff->photo != null)
                                <img src="{{asset('front/img/'.$staff->photo)}}" id="img" width="150"/>
                                @else
                                <img src="{{asset('front/img/default.png')}}" id="img" width="150"/>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="control-label col-lg-2 col-sm-2">
                                Description
                            </label>
                            <div class="col-lg-11 col-sm-10">
                                <textarea name="description" id="description" rows="6" class="form-control ckeditor">{{$staff->description}}
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-lg-1 col-sm-2">&nbsp;</label>
                            <div class="col-lg-6 col-sm-8">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-danger" type="reset">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    function loadFile(e){
        var output = document.getElementById('img');
        output.width = 150;
        output.src = URL.createObjectURL(e.target.files[0]);
    }
</script>
<script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript">
   var roxyFileman = "{{asset('fileman/index.html?integration=ckeditor')}}"; 

  CKEDITOR.replace( 'description',{filebrowserBrowseUrl:roxyFileman, 
                               filebrowserImageBrowseUrl:roxyFileman+'&type=image',
                               removeDialogTabs: 'link:upload;image:upload'});
</script> 
@endsection