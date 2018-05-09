@include('user.header')
			
			<div class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-title-heading">
								<h1 class="h1-title">Team Member</h1>
							</div><!-- /.page-title-heading -->
							<ul class="breadcrumbs">
								<li><a href="#" title="">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
								<li>Our Member</li>
							</ul><!-- /.breadcrumbs -->
							<div class="clearfix"></div><!-- /.clearfix -->
						</div>
					</div>
				</div>
			</div><!-- /.page-title -->

			<section class="flat-row section-case-single">   
		        <div class="container">
		            <div class="row">
		            	<div class="col-lg-3 col-sm-12">
		            		<div class="content-casesingle flat-team">
		            			<div class="featured">
		            				<img src="{{url($result->image)}}" alt="image">
		            			</div>
		            			<div class="social-links text-center">
									<a href="{{$result->facebook_link}}" data-title="Facebook" class="facebook"><i class="fa fa-facebook"></i></a>
									<a href="{{$result->twitter_link}}" data-title="Twitter" class="twitter"><i class="fa fa-twitter"></i></a> 
									<a href="{{$result->linked_link}}" data-title="LinkedIn" class="linkedin"><i class="fa fa-linkedin"></i></a>  
								</div> 
		            		</div>	
		            	</div> 
		            	<div class="col-lg-9 col-sm-12">
		            		<div class="team-info">	
		            			<div class="team-name single-team-name">{{$result->fullname}}</div>
								<div class="team-subtitle single-team-position">{{$result->position}}</div> 		
								<div class="team-desc">
									{{$result->description}}

								</div>
								
							</div>
		            	</div>
		        	</div>
		        </div>
		    </section>  

@include('user.footer')
 