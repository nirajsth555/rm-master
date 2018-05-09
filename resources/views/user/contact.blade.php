@include('user.header')
			
	<div class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-title-heading">
						<h1 class="h1-title">Contact Us</h1>
					</div>
					<ul class="breadcrumbs">
						<li><a href="#" title="">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
						<li>Contact Us</li>
					</ul>
					<div class="clearfix"></div><!-- /.clearfix -->
				</div>
			</div>
		</div>
	</div>

	<section class="flat-row page-contact contact-v2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- <div class="title-section center s1 pd-title-section2">
						<h2>Contact Us</h2>
						<p class="sub-title-section">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text seit 1500, als ein unbekannter Schriftsteller</p>
					</div> 
					<div class="dividers h52">
						
					</div> -->
					<div class="contact-info clearfix">

						<div class="info text-center">
							<div class="icon">
								<i class="icon-phone"></i>
							</div>
							<div class="content">
							 	<h2>+977-1-4781891</h2>
							 	<p>+977-1-4786030</p>
							</div>
						</div>

						<div class="info text-center">
							<div class="icon">
								<i class="icon-map"></i>
							</div>
							<div class="content">
							 	<h2>6th floor, Shree Krishna Sadan</h2>
							 	<p> New Baneshwor-10,Kathmandu, NEPAL.</p>
							</div>
						</div>

						<div class="info text-center">
							<div class="icon">
								<i class="icon-envelope"></i>
							</div>
							<div class="content">
							 	<h2>rmgroupgroup@gmail.com</h2>
							 	<p>info@rmgroup.com</p>
							</div>
						</div>
					</div>
					<div class="dividers h77"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="flat-row pd-contact-v1 page-contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-xs-12">
					<div class="contact-user">
						<div class="list-info clearfix">
							<div class="thumbnail ">
								<img src="{{url('public/user/images/testimonials/testimonial1.jpg')}}" alt="">
							</div>
							<div class="text">
								<h3>Peoples Energy(Khimti 2HEP,48.8MW)</h3>
								<p>Khimti Khola</p>
								<ul class="flat-infomation">
									<li class="phone">+977-1-4786030</li>
									<li class="email">khimti@gmail.com</li>
								</ul>
							</div>	
						</div>
						<div class="list-info clearfix">
							<div class="thumbnail ">
								<img src="{{url('public/user/images/testimonials/testimonial1.jpg')}}" alt="">
							</div>
							<div class="text">
								<h3>Bindhyabasini Hydropower</h3>
								<p>Bindhyabasini Khola</p>
								<ul class="flat-infomation">
									<li class="phone">+977-1-4786030</li>
									<li class="email">Bindhyabasini@gmail.com</li>
								</ul>
							</div>	
						</div>
						<div class="list-info clearfix">
							<div class="thumbnail ">
								<img src="{{url('public/user/images/testimonials/testimonial1.jpg')}}" alt="">
							</div>
							<div class="text">
								<h3>Multi Energy (HEP 20 MW)</h3>
								<p>Langtang Khola</p>
								<ul class="flat-infomation">
									<li class="phone">+977-1-4786030</li>
									<li class="email">multienergy@gmail.com</li>
								</ul>
							</div>	
						</div>  
					</div>
				</div>
				<div class="col-lg-6 col-xs-12">
					<div class="flat-form-info style2">
						<div class="title-section">
							<h2>Get in touch</h2>
						</div> 
						<form id="contactform"  method="POST" action="contact" novalidate="novalidate" class="form-info style2">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="form-message" style="display: none;">
                         <!-- Success and error messages form ajax goes here -->
                        </div>
							<div class="wrap-input clearfix">
								<p class="input-info"><input type="text" name="client_name" id="name" value="" placeholder="Your name *" ></p>
								<p class="input-info"><input type="text" name="client_email" id="email" value="" placeholder="Email Address*" ></p>
							</div>
							<p class="textarea-info clearfix"><textarea id="message-contact" name="message" placeholder="Message*" ></textarea></p>
								
							<p class="submit-info"><button type="submit" class="flat-button">Get In touch</button></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- map -->
    <section class="pdmap">
		<div class="flat-maps" data-address="Bhaktapur, Nepal" data-height="350" data-images="" data-name="Ravita Map"></div>
        <div class="gm-map">	            
            <div class="map"></div>                        
        </div>
    </section>

@include('user.footer')