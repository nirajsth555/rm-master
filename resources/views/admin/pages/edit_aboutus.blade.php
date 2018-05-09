@extends('admin.layout')
@section('dashboard')
 <section class="content-header">
      <h1>
        Edit About US
        
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</a></li>
        <
        <li class="active">Edit About us</li>
      </ol>
    </section>
@stop

@section('editaboutuscontent')
 <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">CK Editor
                <small>Advanced and full of features</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
               <form action="{{url('content-edited')}}/{{$id->id}}" method="POST">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
                     
                    <textarea id="editor1" name="about_us" rows="10" cols="80">
                                  {{$id->about_us_content}}       
                    </textarea>
                   
                    <button>Post</button></a>
                    </form>
                   
              
            </div>
          </div>
          </div>
@stop