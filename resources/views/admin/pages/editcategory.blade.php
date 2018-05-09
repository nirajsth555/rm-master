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


@section('editcategory')
@if(Session::has('success_message'))
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
  
  <div class="alert-success alert-dismissible alertDismissible">{{ Session::get('success_message') }}</div>



@endif

<div class="box box-primary">
 <form role="form" action="{{url('category-edited')}}/{{$id->id}}" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{csrf_token()}}" >
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="categoryname" placeholder="Enter Full Name" value="{{$id->category_name}}">{{$errors->first('categoryname')}}
                </div>
                
               
              
                
                
              
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">EDIT</button>
              </div>
            </form>
            </div>
@stop