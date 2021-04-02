<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from saaspik.pixelsigns.art/saaspik/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Mar 2021 11:08:21 GMT -->
<head>
	<!-- Meta Data -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>@yield('title')</title>


	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/fav/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/fav/favicon-16x16.png">
	<link rel="mask-icon" href="assets/img/fav/safari-pinned-tab.svg" color="#fa7070">

	<meta name="msapplication-TileColor" content="#fa7070">
	<meta name="theme-color" content="#fa7070">

	<!-- Dependency Styles -->
	<link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/fontawesome/css/all.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/swiper/css/swiper.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/wow/css/animate.css" type="text/css">
	<link rel="stylesheet" href="dependencies/magnific-popup/css/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="dependencies/components-elegant-icons/css/elegant-icons.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/simple-line-icons/css/simple-line-icons.css" type="text/css">

	<!-- Site Stylesheet -->
	<link rel="stylesheet" href="assets/css/app.css" type="text/css">
  <link rel="stylesheet" href="assets/css/custom.css" type="text/css">

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

    @yield('page')

		<!--=========================-->
		<!--=        Footer         =-->
		<!--=========================-->
    @include('layouts.footer')


	</div><!-- /#site -->

	<!-- Dependency Scripts -->
	<script src="dependencies/jquery/jquery.min.js"></script>
	<script src="dependencies/bootstrap/js/bootstrap.min.js"></script>
	<script src="dependencies/swiper/js/swiper.min.js"></script>
	<script src="dependencies/jquery.appear/jquery.appear.js"></script>
	<script src="dependencies/wow/js/wow.min.js"></script>
	<script src="dependencies/countUp.js/countUp.min.js"></script>
	<script src="dependencies/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="dependencies/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="dependencies/jquery.parallax-scroll/js/jquery.parallax-scroll.js"></script>
	<script src="dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
	<script src="dependencies/gmap3/js/gmap3.min.js"></script>
	<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&amp;ver=2.1.6'></script>


	<!-- Site Scripts -->
	<script src="assets/js/header.js"></script>
	<script src="assets/js/app.js"></script>

</body>


<!-- Mirrored from saaspik.pixelsigns.art/saaspik/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Mar 2021 11:09:38 GMT -->
</html>
