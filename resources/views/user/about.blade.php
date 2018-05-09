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

	<section class="flat-row section-about1">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-12">
					<div class="title-section left">
                        <h2>About our company</h2>
                        @foreach($result as $r)
                        <p class="sub-title-section">
						{!! $r->about_us_content  !!}

                        </p>
                        @endforeach
                        <!-- <p class="sub-title-section">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in </p> -->
                    </div>

                     	
				</div>
			</div>
		</div>
	</section>

	 

@include('user.footer')

			 