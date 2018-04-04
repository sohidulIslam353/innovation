@extends('welcome')
@section('content')
<div class="hero-area section">
			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url({{URL::to('front/img/page-background.jpg')}})"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="{{route('/')}}">Home</a></li>
							<li>Our Team Member</li>
						</ul>
						<h1 class="white-text">Our All Team Member</h1>

					</div>
				</div>
		</div>
</div>
<!-- Blog -->
		<div id="blog" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- main blog -->
					<div id="main" class="col-md-12">

						<!-- row -->
						<div class="row">

							<!-- single blog -->
							<div class="col-md-3">
								<div class="single-blog">
									<div class="blog-img">
										<a href="blog-post.html">
											<img src="{{URL::to('front/img/blog01.jpg')}}" alt="">
										</a>
									</div>
									<h4><a href="blog-post.html">Pro eu error molestie deserunt. At per viderer bonorum persecuti.</a></h4>
									<div class="blog-meta">
										<span class="blog-meta-author">By: <a href="#">John Doe</a></span>
										<div class="pull-right">
											<span>18 Oct, 2017</span>
											<span class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i> 35</a></span>
										</div>
									</div>
								</div>
							</div>
							<!-- /single blog -->

							<!-- single blog -->
							<div class="col-md-3">
								<div class="single-blog">
									<div class="blog-img">
										<a href="blog-post.html">
											<img src="{{URL::to('front/img/blog02.jpg')}}" alt="">
										</a>
									</div>
									<h4><a href="blog-post.html">Pro eu error molestie deserunt. At per viderer bonorum persecuti.</a></h4>
									<div class="blog-meta">
										<span class="blog-meta-author">By: <a href="#">John Doe</a></span>
										<div class="pull-right">
											<span>18 Oct, 2017</span>
											<span class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i> 35</a></span>
										</div>
									</div>
								</div>
							</div>
							<!-- /single blog -->

							<!-- single blog -->
							<div class="col-md-3">
								<div class="single-blog">
									<div class="blog-img">
										<a href="blog-post.html">
											<img src="{{URL::to('front/img/blog03.jpg')}}" alt="">
										</a>
									</div>
									<h4><a href="blog-post.html">Pro eu error molestie deserunt. At per viderer bonorum persecuti.</a></h4>
									<div class="blog-meta">
										<span class="blog-meta-author">By: <a href="#">John Doe</a></span>
										<div class="pull-right">
											<span>18 Oct, 2017</span>
											<span class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i> 35</a></span>
										</div>
									</div>
								</div>
							</div>
							<!-- /single blog -->

							<!-- single blog -->
							<div class="col-md-3">
								<div class="single-blog">
									<div class="blog-img">
										<a href="blog-post.html">
											<img src="{{URL::to('front/img/blog04.jpg')}}" alt="">
										</a>
									</div>
									<h4><a href="blog-post.html">Pro eu error molestie deserunt. At per viderer bonorum persecuti.</a></h4>
									<div class="blog-meta">
										<span class="blog-meta-author">By: <a href="#">John Doe</a></span>
										<div class="pull-right">
											<span>18 Oct, 2017</span>
											<span class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i> 35</a></span>
										</div>
									</div>
								</div>
							</div>
							<!-- /single blog -->

						</div>
						<!-- /row -->

						<!-- row -->
						<div class="row">

							<!-- pagination -->
							<div class="col-md-12">
								<div class="post-pagination">
									<a href="#" class="pagination-back pull-left">Back</a>
									<ul class="pages">
										<li class="active">1</li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
									</ul>
									<a href="#" class="pagination-next pull-right">Next</a>
								</div>
							</div>
							<!-- pagination -->

						</div>
						<!-- /row -->
					</div>
					<!-- /main blog -->

		

				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>

@endsection