@extends('admin.layout')

@section('dashboard')
<section class="content-header">
      <h1>
        Add a new Team Member
       
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Add Team</a></li>
        
      </ol>
    </section>
@stop


@section('addteam')
@if(Session::has('success_message'))
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
  
  <div class="alert-success alert-dismissible alertDismissible">{{ Session::get('success_message') }}</div>



@endif
<div class="box box-primary">
 <form role="form" action="{{url('team-added')}}" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{csrf_token()}}" >
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Full Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="fullname" placeholder="Enter Full Name" value="{{Request::old('fullname')}}">{{$errors->first('fullname')}}
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Position</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="position" placeholder="Enter the position in company">
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="3" placeholder="Tell about Team Member" name="description"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Facebook Link</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter facebook link" name="fb" value="https://">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Twitter Link</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter twitter link" name="twit" value="https://">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">LinkedIn Link</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter LinkedIn link" name="link" value="https://">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Upload Image</label>
                  <input type="file" id="exampleInputFile" name="image" value="{{Request::old('image')}}" >{{$errors->first('image')}}

                 
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            </div>


@stop