@extends('admin.layout')



@section('dashboard')
 <section class="content-header">
      <h1>
       About Us
        
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</li>
        <li>About Us</a></li>
        
      </ol>
    </section>
@stop

@if(Session::has('success_message'))
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
  
  <div class="alert-success alert-dismissible alertDismissible">{{ Session::get('success_message') }}</div>



@endif


@section('seeaboutuscontent')
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
              
                     @foreach($value as $v)
                    <textarea id="editor1" name="about_us" rows="10" cols="80">
                               {!! $v->about_us_content  !!}            
                    </textarea>
                    
                    <a href="{{url('edit-content')}}/{{$v->id}}"><button>Edit</button></a>
                     <a href="{{url('delete-content')}}/{{$v->id}}"><button>Delete</button></a>
                    @endforeach


                   
              
            </div>
          </div>
          </div>
@stop