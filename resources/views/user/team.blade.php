@include('user.header')
			
	<div class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-title-heading">
						<h1 class="h1-title">About us</h1>
					</div><!-- /.page-title-heading -->
					<ul class="breadcrumbs">
						<li><a href="#" title="">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
						<li>About</li>
					</ul><!-- /.breadcrumbs -->
					<div class="clearfix"></div><!-- /.clearfix -->
				</div>
			</div>
		</div>
	</div> 

	<section class="flat-row section-about2">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
						<div class="content-inner about-team">
							<div class="row">
								<div class="col-md-12">
									<div class="title-section left">
			                            <h2>Our Member</h2>
			                        </div>
								</div>
								@foreach($result as $team)
								<div class="col-md-3 col-sm-6">
									<div class="flat-team">			
										<div class="team-image">
											<img src="{{url($team->image)}}"  height="262px" width="262px">
										</div>										
										<div class="team-info">	
											<div class="team-subtitle">{{$team->position}}</div>
											<div class="team-name"><a href="{{url('single-team')}}/{{$team->id}}">{{$team->fullname}}</a></div>			
											<div class="team-desc">
											{!! \Illuminate\Support\Str::words($team->description, 19,'....')  !!}<a href="single-team.php">See More</a><!-- his fortes.  His presence in some of the prominent institutions such as Gandaki Noodles (RARA) as founding member, one of the pioneers of Instant Noodles in Nepal, where he served as a Managing Director and Dish Home. Furthermore, he has delved into the realm of politics by working as a member of Interim Legislative Parliament and also as a member of Electricity Tariff Fixation Committee. 
												As a leading figurehead of RM group, he is currently involved as Chairman in companies such as People's Energy, Bindhyabasini Hydropower, Multi Energy, Ripoo Mardenee and Win Private Limited. As influential as he is in the business sphere, he carries the same dignity in the social sphere as well which is substantiated by his involvement in Rotary Club of Pashupati, Nepal Red Cross Society, Iscon Nepal and Union of Industry and Commerce, a non-profit and non-political business organization having networks all over Nepal. -->

											</div>
											<div class="social-links">
												<a href="{{$team->facebook_link}}" data-title="Facebook" class="facebook"><i class="fa fa-facebook"></i></a>
												<a href="#" data-title="Twitter" class="twitter"><i class="fa fa-twitter"></i></a> 
												<a href="#" data-title="LinkedIn" class="linkedin"><i class="fa fa-linkedin"></i></a>  
											</div>
										</div>
									</div> <!-- /.flat-team -->
								</div>
								@endforeach
									
								
								
						
								
							</div>	
						</div>
				</div> 
			</div>
		</div>
	</section>

@include('user.footer')

			 