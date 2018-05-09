@extends('admin.layout')

@section('dashboard')
<section class="content-header">
      <h1>
        Add a New News Category
       
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</li>
        <li>Add Category</li>
        
      </ol>
    </section>
@stop


@section('addcategory')
@if(Session::has('success_message'))
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
  
  <div class="alert-success alert-dismissible alertDismissible">{{ Session::get('success_message') }}</div>



@endif
<div class="box box-primary">
 <form role="form" action="{{url('post-category')}}" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{csrf_token()}}" >
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="categoryname" placeholder="Enter Full Name" value="{{Request::old('categoryname')}}">{{$errors->first('categoryname')}}
                </div>
                
               
              
                
                
              
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            </div>
@stop