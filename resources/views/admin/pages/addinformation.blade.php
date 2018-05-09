@extends('admin.layout')

@section('dashboard')
<section class="content-header">
      <h1>
        Add Information
       
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Add Information</a></li>
        
      </ol>
    </section>
@stop

@section('addinformation')
@if(Session::has('success_message'))
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
  
  <div class="alert-success alert-dismissible alertDismissible">{{ Session::get('success_message') }}</div>



@endif
            <form action="{{url('post-info')}}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="col-md-12">
              <div class="form-message" style="display: none;">
                <!-- Success and error messages form ajax goes here -->
              </div>
            <div class="form-group">
                 <label for="exampleInputEmail1">Add Phone Number</label>
                 <input type="text" class="form-control" id="engtitle" placeholder="" name="phone_number">
                 <p id="statuspass"></p>
            </div>

            <div class="form-group">
                 <label for="exampleInputEmail1">Add Address</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="address">
            </div>

            <div class="form-group">
                 <label for="exampleInputEmail1">Add Email</label>
                 <input type="email" class="form-control"  placeholder="" name="email">
            </div>

            <div class="form-group">
                 <label for="exampleInputEmail1">Add Facebook Link</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="facebook" value="https://">
            </div>

            <div class="form-group">
                 <label for="exampleInputEmail1">Add Twitter Link</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="twitter" value="https://">
            </div>

            <div class="form-group">
                 <label for="exampleInputEmail1">Add Instagram Link</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="instagram" value="https://">
            </div>


             <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-submit">Submit</button>
              </div>

            



          


           




           

         
          </div>
          </form>
@stop