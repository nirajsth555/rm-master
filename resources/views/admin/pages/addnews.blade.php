@extends('admin.layout')

@section('dashboard')
<section class="content-header">
      <h1>
        Add News
       
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Add News</a></li>
        
      </ol>
    </section>
@stop

@section('addnews')
@if(Session::has('success_message'))
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
  
  <div class="alert-success alert-dismissible alertDismissible">{{ Session::get('success_message') }}</div>



@endif
            <form action="{{url('post-news')}}" method="POST"  enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="col-md-12">
              <div class="form-message" style="display: none;">
                <!-- Success and error messages form ajax goes here -->
              </div>
            <div class="form-group">
                 <label for="exampleInputEmail1">News Title in English</label>
                 <input type="text" class="form-control" id="engtitle" placeholder="Enter title of news in ENGLISH" name="eng_title">
                 <p id="statuspass"></p>
            </div>

            <div class="form-group">
                 <label for="exampleInputEmail1">News Title in Nepali</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title of news in NEPALI" name="nep_title">
            </div>

            

               <div class="form-group">
                  <label for="exampleInputFile">Upload a Image</label>
                  <input type="file" id="exampleInputFile" name="image">

                  <p class="help-block">Example block-level help text here.</p>
                </div>



          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Enter Full News in English
                <small>CK EDITOR</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
               
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad"> 
                <textarea class="ckeditor" name="eng_editor" rows="10" cols="80">
                </textarea>
                                            
                   
              
            </div>

          </div>


           <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Enter Full News in English
                <small>CK EDITOR</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
               
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
             
                    <textarea class="ckeditor" name="nep_editor" rows="10" cols="80">
                        
                    </textarea>
              
            </div>
          </div>
         <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-submit">Submit</button>
              </div>




           

         
          </div>
          </form>
@stop