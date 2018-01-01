@extends('layouts.default')
@section('content')
	<!-- gallery -->
	<div class="great-support-container section-container section-container-gray-bg text">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 great-support section-description wow fadeIn">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 blog-box wow fadeInLeft">
					<h2>Galeri</h2>
					<div class="row">
						<div class="col-sm-3 portfolio-box wow fadeInUp">
							<div class="portfolio-box-image-gallery">
								<a href="assets/img/gallery/1.jpg" rel="prettyPhoto" title="This is description"><img src="assets/img/gallery/1.jpg" alt="This is title"></a>
							</div>
							<div class="portfolio-box-date"><i class="fa fa-calendar-o"></i> 20 Nopember 2017</div>
							<p>Lorem ipsum dolor sit amet...</p>
						</div>
						<div class="col-sm-3 portfolio-box wow fadeInDown">
							<div class="portfolio-box-image-gallery">
								<img src="assets/img/gallery/2.jpg" href="#" data-at2x="assets/img/portfolio/2.jpg">
							</div>
							<div class="portfolio-box-date"><i class="fa fa-calendar-o"></i> 01 Desember 2017</div>
							<p>Lorem ipsum dolor sit amet...</p>
						</div>
						<div class="col-sm-3 portfolio-box wow fadeInUp">
							<div class="portfolio-box-image-gallery">
								<img src="assets/img/gallery/3.jpg" href="#" data-at2x="assets/img/portfolio/3.jpg">
							</div>
							<div class="portfolio-box-date"><i class="fa fa-calendar-o"></i> 10 Desember 2017</div>
							<p>Lorem ipsum dolor sit amet...</p>
						</div>
						<div class="col-sm-3 portfolio-box wow fadeInUp">
							<div class="portfolio-box-image-gallery">
								<img src="assets/img/gallery/4.jpg" href="#" data-at2x="assets/img/portfolio/3.jpg">
							</div>
							<div class="portfolio-box-date"><i class="fa fa-calendar-o"></i> 15 Desember 2017</div>
							<p>Lorem ipsum dolor sit amet...</p>
						</div>
					</div>
					<!-- <ul class="gallery clearfix">
						<li><a href="assets/img/gallery/1.jpg" rel="prettyPhoto" title="Description on a single line."><img src="assets/img/gallery/1.jpg"/></a></li>
						<li><a href="assets/img/gallery/1.jpg" rel="prettyPhoto" title="Description on a single line."><img src="assets/img/gallery/1.jpg"/></a></li>
						<li><a href="assets/img/gallery/1.jpg" rel="prettyPhoto" title="Description on a single line."><img src="assets/img/gallery/1.jpg"/></a></li>
					</ul> -->
					<div class="row">
						<div class="col-sm-12 footer-paging">
							<span><a href="#">1</a> <a href="#">2</a> <a href="#">3</a></span>
						</div>
					</div>
					<script>
						$(document).ready(function(){
							$("a[rel^='prettyPhoto']").prettyPhoto({
								social_tools: false
							});
						});
					</script>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 great-support section-description wow fadeIn">
				</div>
			</div>
		</div>
	</div>
@stop