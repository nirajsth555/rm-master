@extends('admin.layout')

@section('dashboard')
<section class="content-header">
      <h1>
        Add Partner
       
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Add Partner</a></li>
        
      </ol>
    </section>
@stop

@section('addsponsor')
@if(Session::has('success_message'))
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
  
  <div class="alert-success alert-dismissible alertDismissible">{{ Session::get('success_message') }}</div>



@endif
            <form action="{{url('post-partner')}}" method="POST"  enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="col-md-12">
            <div class="form-group">
                 <label for="exampleInputEmail1">Name of Sponsor</label>
                 <input type="text" class="form-control" id="engtitle"  name="partner_name" ><div class="alert-success alert-dismissible alertDismissible">{{$errors->first('partner_name')}}</div>
                 
            </div>  
            <div class="form-group">
                 <label for="exampleInputEmail1">Website Link of Sponsor</label>
                 <input type="text" class="form-control" id="engtitle" placeholder="Enter title of news in ENGLISH" name="weblink" value="https://">{{$errors->first('weblink')}}
                 
            </div>

            

            

            <div class="form-group">
                  <label for="exampleInputFile">Image of Partner</label>
                  <input type="file" id="exampleInputFile" name="image"><div class="alert-success alert-dismissible alertDismissible">{{$errors->first('image')}}</div>

                  <p class="help-block">
                    choose image dimension of 270 width * 105 height
                  </p>
            </div>

          


           
         <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-submit">Submit</button>
              </div>




           

         
          </div>
          </form>
@stop