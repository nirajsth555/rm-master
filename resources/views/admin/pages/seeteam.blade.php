@extends('admin.layout')

@section('dashboard')
<section class="content-header">
      <h1>
        See Team
       
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</a></li>
        <li>See Team</a></li>
        
      </ol>
    </section>

@stop

@section('seeteam')
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
                  	<th>Name</th>
                  	<th>Position</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>

                  	
                </tr>
            </thead>
            <tbody>
                @foreach($result as $key=>$n)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$n->fullname}}</td>
                    <td>{{$n->position}}</td>
                    <td>{{$n->description}}</td>
                  	
                    <td><img src="{{url($n->image)}}" width="150px" height="150px"> </td>
                    <td><a href="{{url('edit-team')}}/{{$n->id}}"> <span class="label label-danger">Edit</span></a></td>

                   

                  	<td><a href="{{url('delete-team')}}/{{$n->id}}"> <span class="label label-danger">Delete</span></a></td>
                  	
                </tr>
                  	@endforeach
               
            </tbody>
           
  		</table>
    </div> 
  </div>
@stop