@include('user.header')
		
	<div class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-title-heading">
						<h1 class="h1-title">News</h1>
					</div><!-- /.page-title-heading -->
					<ul class="breadcrumbs">
						<li><a href="#" title="">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
						<li>News</li>
					</ul><!-- /.breadcrumbs -->
					<div class="clearfix"></div><!-- /.clearfix -->
				</div>
			</div>
		</div>
	</div>

	<section class="main-content new-v2">
		<div class="container">
			<div class="row">

				<div class="col-lg-8">
					<div class="post-wrap">
						<!-- The part which is dynamically pulled from ajax is separated into newsitem view -->
						@include('user.newsitem')						
					</div>

				</div>

				
				<div class="col-lg-4">
					<div class="sidebar right">
						<aside class="widget widget-search">
						    <form action=""  class="searchform" method="get">
                                <div>
                                    <input type="text" id="ss" class="sss" placeholder="Search news...">
                                    <input type="submit" value="" id="searchsub">
                                    <ul class="search-group"> 
                                    	<!-- <li class="search-item">News 1</li> -->
                                        <!-- List goes here -->
                                    </ul>
                                </div>
                            </form>
						</aside>
						<!-- /.widget-categories -->
						<aside class="widget widget-brochure">
							<div class="brochure-box-title">
								<h5 class="brochure-title">Our Brochure</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique exercitationem doloremque aspernatur . 
								</p>
							</div><!-- /.brochure-box-title -->
							<p class="btn-download">
								<a href="#" title="" class="pdf flat-effect">Download .PDF</a>
							</p>
							<p class="btn-download doc">
								<a href="#" title="" class="doc flat-effect">Download .DOC</a>
							</p>
						</aside><!-- /.widget-brochure -->
						<!-- /.widget-tags -->
					</div><!-- /.sidebar -->		
				</div><!-- /.col-lg-4 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
		
@include('user.footer')