<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>RM GROUP</title>

    <meta name="author" content="themsflat.com">

     <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Boostrap style -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{url('public/user/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/user/revolution/css/settings.css')}}">
	
	<!-- Theme style -->
	<link rel="stylesheet" type="text/css" href="{{url('public/user/css/style.css')}}">
      
	<!-- Reponsive -->
	<link rel="stylesheet" type="text/css" href="{{url('public/user/css/responsive.css')}}"> 

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{url('public/user/css/animate.css')}}">
 
    <link href="{{url('public/user/images/fevicon.png')}}" rel="shortcut icon">
   
    


</head>
	<body>

        <div class="boxed">
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-inner ball-scale-ripple-multiple">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
            </div>
        </div>

		<div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 reponsive-onehalf top-left-bar">
                        <ul class="flat-infomation">
                        @foreach($d['i'] as $info)
                            <li class="address">{{$info->address}}</li> 
                            <li class="phone">{{$info->phone_number}}</li>
                            @endforeach
                        </ul><!-- /flat-infomation -->
                    </div>
                    <div class="col-lg-6 reponsive-onehalf">
                        <ul class="social-links text-right">
                            <li><a href="{{$info->facebook_link}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$info->twitter_link}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$info->instagram_link}}"><i class="fa fa-instagram"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- /.top -->
        <header id="header" class="header bg-color">
            <div class="container">
                <div class="header-wrap">
                <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div id="logo" class="logo">
                                <a href="index.PHP" title="">
                                    <img src="{{url('public/user/images/logo.png')}}" alt="RM Group Logo" />
                                </a>
                            </div> 
                        </div> 
                        <div class="col-lg-9 col-sm-6">
                            <div class="btn-menu">
                                    <span></span>
                                </div><!-- //mobile menu button -->
                            
                            
                            <div class="nav-wrap">
                                <nav id="mainnav" class="mainnav">
                                    <ul class="menu">
                                        <li>
                                            <a href="{{url('/')}}" title="">Home</a> 
                                        </li>
                                        <li>
                                            <a href="{{url('about-us')}}" title="">About us</a> 
                                        </li>
                                        <li>
                                            <a href="#" title="">Projects  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                <ul class="sub-menu"> 
                                                @foreach($d['p'] as $projects)

                                                    <li><a href="{{url('projectitem')}}/{{$projects->id}}"><i class="fa fa-arrow-right"></i>{{$projects->english_title}}</a></li>
                                                   @endforeach
                                                   <li><a href="{{url('project')}}">See All Projects</a></li>
                                                </ul> 
                                        </li>
                                        <li>
                                            <a href="{{url('our-team')}}" title="">Our Member</a> 
                                        </li>
                                        <li>
                                            <a href="{{url('news')}}" title="">News</a> 
                                        </li> 

                                        <li>
                                            <a href="{{url('contact-us')}}" title="">Contact us</a> 
                                        </li>
                                    </ul><!-- /.menu -->

                                </nav><!-- /#mainnav -->
                            </div><!-- /.nav-wrap -->
                        </div>
                    </div>
                </div>
            </div>
        </header>