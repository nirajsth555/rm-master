@extends('admin.layout')

@section('dashboard')
<section class="content-header">
      <h1>
        See Slider Image
       
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</a></li>
        <li>See Slider Image</a></li>
        
      </ol>
    </section>

@stop

@section('seesliderimage')
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
                  	<th>Image</th>
                  	<th>Option</th>
                    <th>Delete</th>
                  	
                </tr>
            </thead>
            <tbody>
                @foreach($result as $key=>$n)
                <tr>
                    <td>{{++$key}}</td>
                  	
                    <td><img src="{{url($n->slider_image)}}" width="700px" height="350px"> </td>

                    @if($n->status==1)

                  	<td><a href="{{url('remove-slider')}}/{{$n->id}}"> <span class="label label-primary">Remove from Slider</span></a></td>
                  	@else
                  	<td><a href="{{url('add-slider')}}/{{$n->id}}"> <span class="label label-primary">Add To Slider</span></a></td>
                  	@endif

                  	<td><a href="{{url('delete-slider-image')}}/{{$n->id}}"> <span class="label label-danger">Delete</span></a></td>
                  	
                </tr>
                  	@endforeach
               
            </tbody>
           
  		</table>
    </div> 
  </div>
@stop