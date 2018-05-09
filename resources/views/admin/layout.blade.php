 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
   <meta name="_token" content="{{ csrf_token() }}"/>

  <link rel="stylesheet" href="{{url('public/asset/admin_assist/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('public/asset/admin_assist/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('public/asset/admin_assist/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('public/asset/admin_assist/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{url('public/asset/admin_assist/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{url('public/asset/admin_assist/dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{url('public/asset/admin_assist/bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{url('public/asset/admin_assist/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{url('public/asset/admin_assist/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url('public/asset/admin_assist/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{url('public/asset/admin_assist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script type="text/javascript">
    // These variables are created here so that they can be used inside .js files
    var APP_URL = {!! json_encode(url('/')) !!}
    var X_CSRF_TOKEN = {!! csrf_token() !!}
  </script>


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{url('public/asset/admin_assist/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{url('public/asset/admin_assist/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                  
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
             
              
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                               
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('public/asset/admin_assist/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
         
        </div>
      </div>
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fas fa-users"></i>
            <span>Slider Image</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('see-slider-image')}}"><i class="fa fas fa-list-ol"></i>See All Images</a></li>
            <li><a href="{{url('add-slider-image')}}"><i class="glyphicon glyphicon-plus"></i>Add A Slider Image</a></li>
           
          </ul>
        </li>
        
       <li class="treeview">
          <a href="#">
            <i class="fa fas fa-users"></i>
            <span>Team Members</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('see-team')}}"><i class="fa fas fa-list-ol"></i>List Team Members</a></li>
            <li><a href="{{url('add-team')}}"><i class="glyphicon glyphicon-plus"></i>Add Team Members</a></li>
           
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>About US Content</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="{{url('see-content')}}"><i class="fa fa-circle-o"></i>See Content</a></li>
            <li><a href="{{url('add-about-us')}}"><i class="fa fa-circle-o"></i>Add Content</a></li>
            
                     </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>News</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('add-news')}}"><i class="fa fa-circle-o"></i>Add News</a></li>
            <li><a href="{{url('see-news')}}"><i class="fa fa-circle-o"></i>Show News</a></li>
          
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Projects</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('add-project')}}"><i class="fa fa-circle-o"></i>Add Project</a></li>
            <li><a href="{{url('see-all-project')}}"><i class="fa fa-circle-o"></i>Show Project</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="">
            <i class="fa fa-calendar"></i> <span>Contact Us</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('add-info')}}"><i class="fa fa-circle-o"></i>Add Information</a></li>
            <li><a href="{{url('see-info')}}"><i class="fa fa-circle-o"></i>See Information</a></li>
          </ul>
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Partners</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('add-partner')}}"><i class="fa fa-circle-o"></i>Add Partners</a></li>
            <li><a href="{{url('see-partner')}}"><i class="fa fa-circle-o"></i>See Partners</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


 <!-- Content Content-->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    @yield('contentheader')
    @yield('tabledashboard')
    @yield('dashboard')
    
   <section class="content"> 
   @yield('addaboutuscontent')
   @yield('seeaboutuscontent')
   @yield('editaboutuscontent')
    @yield('addteam')
   @yield('statbox')
   @yield('listofteam')
   @yield('addcategory')
   @yield('seecategory')
   @yield('editcategory')
   @yield('addnews')
   @yield('editnews')
   @yield('see_single_news')
   @yield('addproject')
   @yield('seeproject')
   @yield('editproject')
   @yield('addinformation')
   @yield('addsponsor')
   @yield('seepartner')
   @yield('editsponsor')
   @yield('addsliderimage')
   @yield('seesliderimage')
   @yield('seeteam')
   @yield('editteam')
   @yield('seecontactinfo')
   @yield('editinformation')
    <div class="row">
   @yield('seenews')
    @yield('teamtable')
     <section class="col-lg-7 connectedSortable">
@yield('saleschart')
@yield('chatbox')
@yield('list')
@yield('email')

     </section>
      <section class="col-lg-5 connectedSortable">
      @yield('visitormap')
      @yield('salegraph')
      @yield('calendar')
      </section>
    </div>
   </section>
  </div>



  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{url('public/asset/admin_assist/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('public/asset/admin_assist/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('public/asset/admin_assist/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{url('public/asset/admin_assist/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{url('public/asset/admin_assist/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url('public/asset/admin_assist/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{url('public/asset/admin_assist/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{url('public/asset/admin_assist/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('public/asset/admin_assist/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url('public/asset/admin_assist/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{url('public/asset/admin_assist/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{url('public/asset/admin_assist/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{url('public/asset/admin_assist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{url('public/asset/admin_assist/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('public/asset/admin_assist/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('public/asset/admin_assist/dist/js/adminlte.min.js')}}"></script>
<script src="{{url('public/asset/admin_assist/dist/js/custom.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('public/asset/admin_assist/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('public/asset/admin_assist/dist/js/demo.js')}}"></script>
<script src="{{url('public/asset/admin_assist/bower_components/ckeditor/ckeditor.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{url('public/asset/admin_assist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{url('public/asset/admin_assist/bower_components/fastclick/lib/fastclick.js')}}"></script>
<script src="{{url('public/asset/admin_assist/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('public/asset/admin_assist/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>


<script>
  $(function () {
    $('#news-table').DataTable()
     $('#example2').DataTable({
       'paging'      : true,
      'lengthChange': false,
       'searching'   : true,
       'ordering'    : true,
       'info'        : true,
       'autoWidth'   : false
     })
   })

  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })

  $(document).ready(function(){ 
     $(".alertDismissible").fadeTo(2000, 500).slideUp(500, function(){
         $(".alertDismissible").slideUp(600);
       });
  })
</script>
</body>
</html>
