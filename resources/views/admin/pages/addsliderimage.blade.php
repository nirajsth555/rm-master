@extends('admin.layout')

@section('dashboard')
<section class="content-header">
      <h1>
        Add Slider Image
       
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Add Slider Image</a></li>
        
      </ol>
    </section>
@stop

@section('addsliderimage')
@if(Session::has('success_message'))
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
  
  <div class="alert-success alert-dismissible alertDismissible">{{ Session::get('success_message') }}</div>



@endif
            <form action="{{url('slider-image-add')}}" method="POST"  enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="col-md-12">
            <div class="form-group">
                 <label for="exampleInputEmail1">News Title in Nepali</label>
                 <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Enter title of news in NEPALI" name="status" value="1">
            </div>
            

            

            

            <div class="form-group">
                  <label for="exampleInputFile">Slider Image</label>
                  <input type="file" id="exampleInputFile" name="image"><div class="alert-success alert-dismissible alertDismissible">{{$errors->first('image')}}</div>

                  <p class="help-block">
                    choose image dimension of 1920 width * 580 height
                  </p>
            </div>

          


           
         <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-submit">Submit</button>
              </div>




           

         
          </div>
          </form>
@stop