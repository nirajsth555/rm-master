@extends('admin.layout')
@section('dashboard')
<section class="content-header">
	    <h1>
	        Edit News
	    </h1>
	    <ol class="breadcrumb">
	    	<li><i class="fa fa-dashboard"></i> Home</li>
	        <li>Edit News</li>
	    </ol>
	</section>
@stop

@section('editnews')
              @foreach($result as $r)
 <form action="{{url('news-edited')}}/{{$r->id}}" method="POST"  enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="col-md-12">
              <div class="form-message" style="display: none;">
                <!-- Success and error messages form ajax goes here -->
              </div>
            <div class="form-group">
                 <label for="exampleInputEmail1">News Title in English</label>
                 <input type="text" class="form-control" id="engtitle" placeholder="Enter title of news in ENGLISH" name="eng_title" value="{{$r->english_title}}">
                 
            </div>

            <div class="form-group">
                 <label for="exampleInputEmail1">News Title in Nepali</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title of news in NEPALI" name="nep_title" value="{{$r->nepali_title}}">
            </div>

            

               <div class="form-group">

                  <label for="exampleInputFile">Upload a Image</label>
                      <img src="{{url($r->image)}}" width="100" height="100">
                  <input type="file" id="exampleInputFile" name="image"  value="{{url($r->image)}}">


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
                           {{$r->english_description}}                 
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
                    {{$r->nepali_description}}

                        
                    </textarea>
                    
              
            </div>
          </div>
         <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-submit">Submit</button>
              </div>




           

         
          </div>
          </form>
          @endforeach
@stop