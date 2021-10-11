<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta Data -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>@yield('title')</title>
	<meta name="author" content="@yield('author')">
	<meta name="description" content="@yield('description')">

	<link rel="apple-touch-icon" sizes="180x180" href="{{ URL::to('/') }}/assets/img/fav/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ URL::to('/') }}/assets/img/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ URL::to('/') }}/assets/img/fav/favicon-16x16.png">
	<link rel="mask-icon" href="{{ URL::to('/') }}/assets/img/fav/safari-pinned-tab.svg" color="#fa7070">

	<meta name="msapplication-TileColor" content="#fa7070">
	<meta name="theme-color" content="#fa7070">

	<!-- Dependency Styles -->
	<link rel="stylesheet" href="{{ URL::to('/') }}/dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/dependencies/fontawesome/css/all.min.css?v=1" type="text/css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/dependencies/swiper/css/swiper.min.css?v=1" type="text/css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/dependencies/wow/css/animate.css?v=1" type="text/css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/dependencies/magnific-popup/css/magnific-popup.css?v=1" type="text/css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/dependencies/components-elegant-icons/css/elegant-icons.min.css?v=1" type="text/css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/dependencies/simple-line-icons/css/simple-line-icons.css?v=1" type="text/css">

	<!-- Site Stylesheet -->
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/app.css?v=1" type="text/css">
  <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/custom.css?v=1" type="text/css">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800;900&amp;family=Satisfy&amp;display=swap" rel="stylesheet">
</head>

<body id="home-version-1" class="home-version-4" data-style="default">

	<a href="#main_content" data-type="section-switch" class="return-to-top">
		<i class="fa fa-chevron-up"></i>
	</a>

	<div class="page-loader">
		<div class="loader">
			<!-- Loader -->
			<div class="blobs">
				<div class="blob-center"></div>
				<div class="blob"></div>
				<div class="blob"></div>
				<div class="blob"></div>
				<div class="blob"></div>
				<div class="blob"></div>
				<div class="blob"></div>
			</div>
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
				<defs>
					<filter id="goo">
						<feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
						<feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
						<feBlend in="SourceGraphic" in2="goo" />
					</filter>
				</defs>
			</svg>

		</div>
	</div><!-- /.page-loader -->

	<div id="main_content">


		<!--=========================-->
		<!--=        Navbar         =-->
		<!--=========================-->
		@include('layouts.navbar')

		@if(  trim($__env->yieldContent('page_banner')) == "contact")
			   @include('layouts.contact_banner')
	  @endif

		@if(  trim($__env->yieldContent('page_banner')) == "classic")
				@include('layouts.page_banner')
		@endif


    @yield('page')

		<!--=========================-->
		<!--=        Footer         =-->
		<!--=========================-->
    @include('layouts.footer')


	</div><!-- /#site -->

	<!-- Dependency Scripts -->
	<script src="{{ URL::to('/') }}/dependencies/jquery/jquery.min.js"></script>
	<script src="{{ URL::to('/') }}/dependencies/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{ URL::to('/') }}/dependencies/swiper/js/swiper.min.js?v=1"></script>
	<script src="{{ URL::to('/') }}/dependencies/jquery.appear/jquery.appear.js?v=1"></script>
	<script src="{{ URL::to('/') }}/dependencies/wow/js/wow.min.js?v=1"></script>
	<script src="{{ URL::to('/') }}/dependencies/countUp.js/countUp.min.js?v=1"></script>
	<script src="{{ URL::to('/') }}/dependencies/isotope-layout/isotope.pkgd.min.js?v=1"></script>
	<script src="{{ URL::to('/') }}/dependencies/imagesloaded/imagesloaded.pkgd.min.js?v=1"></script>
	<script src="{{ URL::to('/') }}/dependencies/jquery.parallax-scroll/js/jquery.parallax-scroll.js?v=1"></script>
	<script src="{{ URL::to('/') }}/dependencies/magnific-popup/js/jquery.magnific-popup.min.js?v=1"></script>
	<script src="{{ URL::to('/') }}/dependencies/gmap3/js/gmap3.min.js?v=1"></script>
	<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&amp;ver=2.1.6'></script>


	<!-- Site Scripts -->
	<script src="{{ URL::to('/') }}/assets/js/header.js"></script>
	<script src="{{ URL::to('/') }}/assets/js/app.js"></script>
	<script src="{{ URL::to('/') }}/assets/js/custom.js"></script>
				 
	<script type="text/javascript" src="{{ URL::to('assets/js/waterTank.js') }}"></script>
	<script>
		$(document).ready(function() {
			
			$('.waterTankHere1').waterTank({
				width: 420,
				height: 360,
				color: '#8bd0ec',
				level: 83
			}).on('click', function(event) {
				$(this).waterTank(Math.floor(Math.random() * 100) + 0 );
			});
		  
			$('.waterTankHere2').waterTank({
				width: 80,
				height: 360,
				color: '#f00',
				level: 80
			}).on('click', function(event) {
				$(this).waterTank(Math.floor(Math.random() * 100) + 0 );
			});
		  
			$('.waterTankHere3').waterTank({
				width: 20,
				height: 360,
				color: '#2e32ff',
				level: 80
			}).on('click', function(event) {
				$(this).waterTank(Math.floor(Math.random() * 100) + 0 );
			});

		});
		</script>
</body> 
</html>
