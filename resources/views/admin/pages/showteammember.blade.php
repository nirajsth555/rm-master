@extends('admin.layout')
 
@section('dashboard')
 <section class="content-header">
      <h1>
        See Team Members
        
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Team Members</a></li>
        
      </ol>
    </section>
@stop 

@section('teamtable')
 <div class="col-xs-12">
 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
            
                <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
                 @foreach($team as $t)
                <tr>
                  <td>{{$t->fullname}}</td>
                  <td>{{$t->position}}
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                @endforeach
                
              
               
                </tbody>
             
              </table>
            </div>
            <!-- /.box-body -->
          </div>
         

 </div>
 @stop
