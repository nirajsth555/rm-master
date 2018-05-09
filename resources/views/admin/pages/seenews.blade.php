@extends('admin.layout')

@section('dashboard')
	<section class="content-header">
	    <h1>
	        List  News
	    </h1>
	    <ol class="breadcrumb">
	    	<li><i class="fa fa-dashboard"></i> Home</a></li>
	        <li>Add News</a></li>
	    </ol>
	</section>
@stop

@section('seenews')
@if(Session::has('success_message'))
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
  
  <div class="alert-success alert-dismissible alertDismissible">{{ Session::get('success_message') }}</div>



@endif
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Table With Full Features</h3>
      <div class="form-message" style="display: none;">
                <!-- Success and error messages form ajax goes here -->
              </div>
    </div> 
    <div class="box-body">
    	<table id="news-table" class="table table-bordered table-striped">
            <thead>
                <tr>

                	<th style="width: 5px">S.N</th>
                  	<th>English Title</th>
                  	<th>Nepali Title</th>
                    <th>Image</th>
                  	<th>Edit</th>
                  	<th>Delete</th>
                  	<th>View</th>
                </tr>
            </thead>
            <tbody>
                @foreach($result as $key=>$n)
                <tr>
                  	<td>{{++$key}}</td>
                  	<td>{{$n->english_title}}
                  	</td>
                  	<td>{{$n->nepali_title}}</td>
                    <td><img src="{{url($n->image)}}" width="150px" height="150px"> </td>

                  	<td><a href="{{url('edit-news')}}/{{$n->id}}"> <span class="label label-primary">Edit</span></a></td>
                  	<td><a href="{{url('delete-news')}}/{{$n->id}}"> <span class="label label-danger">Delete</span></a></td>
                  	<td><a href="{{url('view-single-news')}}/{{$n->id}}"> <span class="label label-success">View</span></a></td>
                </tr>
                  	@endforeach
               
            </tbody>
           
  		</table>
    </div> 
  </div>
@stop