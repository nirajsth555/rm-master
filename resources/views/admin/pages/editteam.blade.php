@extends('admin.layout')

@section('dashboard')
<section class="content-header">
      <h1>
        Edit team member
       
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Edit Team</a></li>
        
      </ol>
    </section>
@stop


@section('editteam')

<div class="box box-primary">
 <form role="form" action="{{url('team-edited')}}/{{$result->id}}" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{csrf_token()}}" >
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Full Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="fullname" placeholder="Enter Full Name" value="{{$result->fullname}}">{{$errors->first('fullname')}}
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Position</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="position" placeholder="Enter the position in company" value="{{$result->position}}">
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="3" placeholder="Tell about Team Member" name="description" >{{$result->description}}</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Facebook Link</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter facebook link" name="fb" value="{{$result->facebook_link}}">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Twitter Link</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter twitter link" name="twit" value="{{$result->twitter_link}}">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">LinkedIn Link</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter LinkedIn link" name="link" value="{{$result->linked_link}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Upload Image</label>
                  <img src="{{url($result->image)}}" >
                  <input type="file" id="exampleInputFile" name="image"  >

                 
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            </div>


@stop