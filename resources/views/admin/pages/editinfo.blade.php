@extends('admin.layout')

@section('dashboard')
<section class="content-header">
      <h1>
        Add Information
       
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</li>
        <li>Add Information</li>
        
      </ol>
    </section>
@stop

@section('editinformation')
@if(Session::has('success_message'))
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
  
  <div class="alert-success alert-dismissible alertDismissible">{{ Session::get('success_message') }}</div>



@endif
            <form action="{{url('info-edited')}}/{{$result->id}}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="col-md-12">
              <div class="form-message" style="display: none;">
                <!-- Success and error messages form ajax goes here -->
              </div>
            <div class="form-group">
                 <label for="exampleInputEmail1"> Phone Number</label>
                 <input type="text" class="form-control" id="engtitle" placeholder="" name="phone_number" value="{{$result->phone_number}}">
                 <p id="statuspass"></p>
            </div>

            <div class="form-group">
                 <label for="exampleInputEmail1"> Address</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="address" value="{{$result->address}}">
            </div>

            <div class="form-group">
                 <label for="exampleInputEmail1"> Email</label>
                 <input type="email" class="form-control"  placeholder="" name="email" value="{{$result->email}}">
            </div>

            <div class="form-group">
                 <label for="exampleInputEmail1"> Facebook Link</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="facebook" value="{{$result->facebook_link}}">
            </div>

            <div class="form-group">
                 <label for="exampleInputEmail1"> Twitter Link</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="twitter" value="{{$result->twitter_link}}">
            </div>

            <div class="form-group">
                 <label for="exampleInputEmail1"> Instagram Link</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="instagram" value="{{$result->instagram_link}}">
            </div>


             <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-submit">Submit</button>
              </div>

            



          


           




           

         
          </div>
          </form>
@stop