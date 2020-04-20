@extends('layouts.template')

@section('title', 'Gallery')

@section('content')
		<!-- Page section -->
	<div id="colorlib-main">	
		<section class="ftco-section ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text justify-content-center align-items-center">
	          <div class="col-md-8 ftco-animate">
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span><a>Collection</a></span></p>
	            <h1 class="bread">Gallery Haji-Umroh</h1>
	          </div>
	        </div>
				</div>
			</section>
			<section class="ftco-section-3">
				<div class="photograhy">
					<div class="row">
						<div class="col-md-4 ftco-animate">
							<a href="/img/gallery/umroh.jpg" class="photography-entry img image-popup d-flex justify-content-start align-items-end" style="background-image: url(/img/gallery/umroh.jpg);">
								<div class="overlay"></div>
								<div class="text ml-4 mb-4">
									<h3>Photo 01</h3>
									<span class="tag">Keberangkatan Umroh</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="/img/gallery/haji.jpg" class="photography-entry img image-popup d-flex justify-content-start align-items-end" style="background-image: url(/img/gallery/haji.jpg);">
								<div class="overlay"></div>
								<div class="text ml-4 mb-4">
									<h3>Photo 02</h3>
									<span class="tag">Nature</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>
@stop