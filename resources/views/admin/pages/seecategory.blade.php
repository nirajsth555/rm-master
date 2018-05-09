@extends('admin.layout')

@section('dashboard')
<section class="content-header">
      <h1>
      See All Category
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">See Category</a></li>
        
      </ol>
    </section>
@stop

@section('seecategory')
@if(Session::has('success_message'))
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
  
  <div class="alert-success alert-dismissible alertDismissible">{{ Session::get('success_message') }}</div>



@endif
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Category Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Category Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  
                </tr>
                @foreach($result as $key=>$name)
                <tr>
                  <td>{{++$key}}</td>
                  <td>{{$name->category_name}}</td>
                  <td><a href="{{url('edit-category')}}/{{$name->id}}"> <span class="label label-primary">Edit</span></a></td>
                  <td><a href="{{url('delete-category')}}/{{$name->id}}"> <span class="label label-danger">Delete</span></a></td>
                 
                </tr>
                @endforeach
               
                
              
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
@stop

