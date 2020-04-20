@extends('layouts.template')

@section('title', 'Blog')

@section('content')
<div id="colorlib-main">
			<section class="ftco-section ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text justify-content-center align-items-center">
	          <div class="col-md-8 ftco-animate">
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
	            <h1 class="bread">Read Our Blog</h1>
	          </div>
	        </div>
				</div>
			</section>
			<section class="ftco-section">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-lg-8">
	    				<div class="row">
			    			<div class="col-md-12">
			    				<div class="blog-entry ftco-animate d-md-flex">
									<a href="single.html" class="img img-2" style="background-image: url(img/blog/doa1.jpg);"></a>
										<div class="text text-2 p-4">
				              				<h3 class="mb-2"><a href="single.html">The best tips & tricks</a></h3>
				              				<div class="meta-wrap">
												<p class="meta">
								              		<span>Dec 14, 2018</span>
								              		<span><a href="single.html">Do'a-Do'a</a></span>
								              		<span>5 Comment</span>
				              					</p>
			              					</div>
								              <p class="mb-4">Jika membaca doa ini maka agar terhindar dari segala penyakit. </p>
								              <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
				            			</div>
								</div>
			    			</div>
			    			<div class="col-md-12">
			    				<div class="blog-entry ftco-animate d-md-flex">
									<a href="single.html" class="img img-2" style="background-image: url(img/blog/doa2.jpg);"></a>
										<div class="text text-2 p-4">
				              				<h3 class="mb-2"><a href="single.html">The Best Tips & Tricks</a></h3>
				              				<div class="meta-wrap">
												<p class="meta">
								              		<span>Dec 14, 2018</span>
								              		<span><a href="single.html">Quotes of the day</a></span>
								              		<span>5 Comment</span>
				              					</p>
			              					</div>
								              <p class="mb-4">Doa pagi dan sore jika membaca di pagi dan di sore hari maka terhindar dari segala sesuatu membahayakan.</p>
								              <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
				            			</div>
								</div>
			    			</div>
			    		</div><!-- END-->
			    		<div class="row">
			          		<div class="col">
			            		<div class="block-27">
					              <ul>
					                <li><a href="#">&lt;</a></li>
					                <li class="active"><span>1</span></li>
					                <li><a href="#">2</a></li>
					                <li><a href="#">3</a></li>
					                <li><a href="#">&gt;</a></li>
					              </ul>
			            		</div>
			          		</div>
			        	</div>
			    	</div>
	    				<div class="col-lg-4 sidebar ftco-animate bg-light">
				            <div class="sidebar-box">
				              <form action="#" class="search-form">
				                <div class="form-group">
				                  <span class="icon icon-search"></span>
				                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
				                </div>
				              </form>
				            </div>

	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Tag Cloud</h3>
	              <ul class="tagcloud">
	                <a href="#" class="tag-cloud-link">Do'a-Do'a</a>
	                <a href="#" class="tag-cloud-link">Quotes</a>
	              </ul>
	            </div>

							<div class="sidebar-box subs-wrap img" style="background-image: url(img/bg_1.jpg);">
								<div class="overlay"></div>
								<h3 class="mb-4 sidebar-heading">Newsletter</h3>
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
	              <form action="#" class="subscribe-form">
	                <div class="form-group">
	                  <input type="text" class="form-control" placeholder="Email Address">
	                  <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit">
	                </div>
	              </form>
	            </div>

	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Paragraph</h3>
	              <p>Kunjungi lah beberapa blog kami semoga bermanfaat.</p>
	            </div>
	          </div><!-- END COL -->
	    		</div>
	    	</div>
	    </section>
	  @stop



		<!-- <div class="page-section blog-page">
			<div class="blog-warp">
				<div class="blog-track">
					<div class="blog-post">
						<div class="blog-thumb set-bg" data-setbg="img/blog/doa1.jpg">
							<div class="post-date">
								<h3>10</h3>
								<span>Dec, ‘18</span>
							</div>
						</div>
						<h2 class="post-title">The best tips & tricks</h2>
						<div class="post-metas">
							<div class="post-meta">By MWR</div>|
							<div class="post-meta">DO'A-DO'A</div>
						</div>
						<p>Jika membaca doa ini maka agar terhindar dari segala penyakit. </p>
					</div>
					<div class="blog-post">
					<div class="blog-thumb set-bg" data-setbg="img/blog/doa2.jpg">
						<div class="post-date">
							<h3>10</h3>
							<span>Dec, ‘18</span>
						</div>
					</div>
					<h2 class="post-title">The Best Tips & Tricks</h2>
					<div class="post-metas">
						<div class="post-meta">By MWR</div>|
						<div class="post-meta">Quotes of the day</div>
					</div>
					<p>Doa pagi dan sore jika membaca di pagi dan di sore hari maka terhindar dari segala sesuatu membahayakan. </p>
				</div>
				</div>
			</div>
		</div>
		 Page section end-->
	 
