@include('user.header')

	<div class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-title-heading">
						<h1 class="h1-title">Single News</h1>
					</div>
					<ul class="breadcrumbs">
						<li><a href="#" title="">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
						<li>Single-news</li>
					</ul> 
					<div class="clearfix"></div> 
				</div>
			</div>
		</div>
	</div>
	
	<section class="main-content blog-single">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="post-wrap">

						<article class="main-post">
							<div class="featured-post">
								<img src="{{url($result->image)}}" alt="image" width="770px" height="385px" />
							</div> 
							<!-- images size for news page is 770*385 px -->
							<div class="entry-post-title">
								<h2 class="post-title">{{$result->english_title}}</h2>
								<ul class="entry-meta">
									<span>Added Date:</span>
									<li class="date"><a href="#" title="">{{\Carbon\Carbon::parse($result->created_at)->toFormattedDateString() }}</a></li> 
								</ul> 
							</div> 
							<div class="entry-content">
								<p> {!! $result->english_description !!}
								</p>
								
							</div>
						</article>
					</div>
				</div>
				
				<div class="col-lg-4">
					<div class="sidebar right">
						<aside class="widget widget-search">
						    <form action="#" id="searchform" class="searchform" method="get">
                                <div>
                                    <input type="text" id="ss" class="sss" placeholder="Search...">
                                    <input type="submit" value="" id="searchsub">
                                    <ul class="search-group"> 
                                    	<!-- <li class="search-item">News 1</li> -->
                                        <!-- List goes here -->
                                    </ul>
                                </div>
                            </form>
						</aside>
						<aside id="recent-post" class=" widget widget-recent">
							<h3 class="widget-title">Recent News</h3>
							<ul>
							@foreach($recent as $new)
								<li>
									<h4><a href="#" title="">{{$new->english_title}}</a></h4>
									<span>April 17, 2018</span>
								</li>
								@endforeach
								
							</ul>
						</aside> 
						
						
					</div>		
				</div>
			</div>
		</div>
	</section>
		

@include('user.footer')