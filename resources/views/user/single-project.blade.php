@include('user.header')
			
	<div class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-title-heading">
						<h1 class="h1-title">Single project</h1>
					</div><!-- /.page-title-heading -->
					<ul class="breadcrumbs">
						<li><a href="#" title="">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
						<li>single-project</li>
					</ul><!-- /.breadcrumbs -->
					<div class="clearfix"></div><!-- /.clearfix -->
				</div>
			</div>
		</div>
	</div>

	<section class="flat-row services-post v2">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="servicesslider style2">
						<ul class="slides">
						    <li>
						    	<img src="{{url($result->project_image)}}" alt="image">
						    </li> 
						</ul>
					</div> 
				</div>

				<div class="col-lg-8"> 
					<div class="title-section left color-theme style2">
						<h2>{{$result->english_title}}</h2>
						<p class="sub-title-section">
						{!! $result->english_description !!}</p> 
					</div>
				</div>
				<div class="col-lg-4">
					<div class="sidebar services">

						<aside class=" widget widget-services">
							<h3 class="widget-title">Other Recent Projects</h3>
							<ul class="menu">
							@foreach($p as $s)
								<li><a href="{{url('projectitem')}}/{{$s->id}}">{{$s->english_title}}<i class="ion-ios-arrow-right"></i></a></li>
								@endforeach
							</ul>
						</aside> 
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>

@include('user.footer')

			