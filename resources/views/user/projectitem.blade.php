<div class="row">
	@foreach($obj as $r)
		<div class="col-lg-6">
			<article class="main-post style2">
				<div class="featured-post">
					<a  href="{{url('projectitem')}}/{{$r->id}}" title="">
						<img src="{{url($r->project_image)}}" alt="image" width="370px" height="220px" />
						<i class="ion-android-search"></i>
					</a>
				</div> 
				<!-- images size for news page is 370*220 px -->
				<div class="entry-post-title">
					<h2 class="post-title"><a href="{{url('projectitem')}}/{{$r->id}}" class="text-center" title="">{{$r->english_title}}</a></h2>
					<ul class="entry-meta">
						<span>Added Date:</span>
						<li class="date"><a href="#" title="">{{\Carbon\Carbon::parse($r->created_at)->toFormattedDateString() }}</a></li> 
					</ul>
				</div>
			</article>
		</div>
	@endforeach
</div>
<div class="blog-pagination">
	
	{{$obj->links()}}
	
</div>