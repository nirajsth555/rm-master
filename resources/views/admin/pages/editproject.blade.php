@extends('admin.layout')

@section('dashboard')
<section class="content-header">
      <h1>
        Add New Project
       
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</li>
        <li>Add New Project</li>
        
      </ol>
    </section>
@stop

@section('editproject')
            <form action="{{url('project-edited')}}/{{$result->id}}" method="POST"  enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="col-md-12">
              
            <div class="form-group">
                 <label for="exampleInputEmail1">Project Title in English</label>
                 <input type="text" class="form-control" id="engtitle" placeholder="Enter title of news in ENGLISH" name="eng_title" value="{{$result->english_title}}">{{$errors->first('english_title')}}
                 <p id="statuspass"></p>
            </div>

            <div class="form-group">
                 <label for="exampleInputEmail1">Project Title in Nepali</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title of news in NEPALI" name="nep_title" value="{{$result->nepali_title}}">{{$errors->first('nepali_title')}}
            </div>

           

            <div class="form-group">
                  <label for="exampleInputFile">Image  Project</label>
                  <img src="{{url($result->project_image)}}" width="300px" height="250px">
                  <input type="file" id="exampleInputFile" name="image">

                  <p class="help-block">Example block-level help text here.</p>
            </div>



          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Full Description In English
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
                   {{$result->english_description}}
                </textarea>
                                            
              
            </div>

            {{$errors->first('eng_editor')}}
          </div>


           <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Full Description In Nepali
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
                     {{$result->nepali_description}}
                        
                    </textarea>
              
            </div>
              {{$errors->first('nep_editor')}}
          </div>
         <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-submit">Edit</button>
              </div>




           

         
          </div>
          </form>
@stop