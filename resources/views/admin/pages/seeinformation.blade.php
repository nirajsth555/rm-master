@extends('admin.layout')

@section('dashboard')
	<section class="content-header">
	    <h1>
	        Information
	    </h1>
	    <ol class="breadcrumb">
	    	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li><a href="#">Add Info</a></li>
	    </ol>
	</section>
@stop

@section('seecontactinfo')
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
                  	<th>Phone Number</th>
                  	<th>Address</th>
                    <th>Email</th>
                    <th>facebook</th>
                    <th>twitter</th>
                    <th>instagram</th>
                  	<th>Edit</th>
                  	<th>Delete</th>
                  	
                </tr>
            </thead>
            <tbody>
                @foreach($result as $key=>$n)
                <tr>
                  	<td>{{++$key}}</td>
                  	<td>{{$n->phone_number}}
                  	</td>
                  	<td>{{$n->address}}</td>
                    <td>{{$n->email}}</td>
                    <td>{{$n->facebook_link}}</td>
                    <td>{{$n->twitter_link}}</td>
                    <td>{{$n->instagram_link}}</td>
                    

                  	<td><a href="{{url('edit-info')}}/{{$n->id}}"> <span class="label label-primary">Edit</span></a></td>
                  	<td><a href="{{url('delete-info')}}/{{$n->id}}"> <span class="label label-danger">Delete</span></a></td>
                  	
                </tr>
                  	@endforeach
               
            </tbody>
           
  		</table>
    </div> 
  </div>
@stop