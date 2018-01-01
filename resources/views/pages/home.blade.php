@extends('layouts.default')
@section('content')
<!-- Loader -->
<!-- <div class="loader">
	<div class="loader-img"></div>
</div> -->
<!-- Top content -->
<div class="top-content">
	<div class="inner-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 text">
					<div class="wow fadeInDown">
						<a href="{{ url('/home') }}"><img src="{{ URL::asset('assets/img/logo.png') }}"></img></a>
					</div>
					<h1 class="wow fadeInLeftBig"><b>LEADERSHIP ISLAMIC SCHOOL AND DAYCARE</b></h1>
					<div class="description wow fadeInLeftBig">
						<h3><b>Be A Future Leader!</b></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- News -->
<div class="portfolio-container section-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 portfolio section-description wow fadeIn">
				<h2>News</h2>
				<div class="divider-1 wow fadeInUp"><span></span></div>
				<p>Check out our latest news and events!</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 portfolio-box wow fadeInUp">
				<div class="portfolio-box-image">
					<img src="{{ URL::asset('assets/img/portfolio/1.jpg') }}" alt="" data-at2x="{{ URL::asset('assets/img/portfolio/1.jpg') }}">
				</div>
				<h3><a href="#">News title</a> <i class="fa fa-angle-right"></i></h3>
				<div class="portfolio-box-date"><i class="fa fa-calendar-o"></i> 20 November 2017</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. <i><a href="#">Read More</a></i></p>
			</div>
			<div class="col-sm-4 portfolio-box wow fadeInDown">
				<div class="portfolio-box-image">
					<img src="{{ URL::asset('assets/img/portfolio/2.jpg') }}" alt="" data-at2x="{{ URL::asset('assets/img/portfolio/2.jpg') }}">
				</div>
				<h3><a href="#">News title</a> <i class="fa fa-angle-right"></i></h3>
				<div class="portfolio-box-date"><i class="fa fa-calendar-o"></i> 01 December 2017</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. <i><a href="#">Read More</a></i></p>
			</div>
			<div class="col-sm-4 portfolio-box wow fadeInUp">
				<div class="portfolio-box-image">
					<img src="{{ URL::asset('assets/img/portfolio/3.jpg') }}" alt="" data-at2x="{{ URL::asset('assets/img/portfolio/3.jpg') }}">
				</div>
				<h3><a href="#">News title</a> <i class="fa fa-angle-right"></i></h3>
				<div class="portfolio-box-date"><i class="fa fa-calendar-o"></i> 10 December 2017</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. <i><a href="#">Read More</a></i></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 section-bottom-button wow fadeInUp">
				<a class="btn btn-link-1" href="#">More News</a>
			</div>
		</div>
	</div>
</div>
@stop