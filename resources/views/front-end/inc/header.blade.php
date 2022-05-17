<!DOCTYPE html>

<html class="">


<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">
	<meta name="author" content="">

	<title>IMN Taxi Service</title>

	<link rel="apple-touch-icon" sizes="180x180" href="favi/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favi/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favi/favicon-16x16.png">
	<link rel="manifest" href="favi/site.webmanifest">
	<link rel="shortcut icon" href="favi/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="favi/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<!-- Library - Loader CSS -->
	<link rel="stylesheet" href="{{ asset('front-end/libraries/loader/loaders.min.css') }}">

	<!-- Library - Google Font Familys -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100italic,100,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<!-- Library - Bootstrap v3.3.5 -->
	<link rel="stylesheet" href="{{ asset('front-end/libraries/bootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('front-end/libraries/bootstrap/bootstrap-datetimepicker.min.css') }}">

	<!-- Font Icons -->
	<link rel="stylesheet" href="{{ asset('front-end/libraries/fonts/font-awesome.min.css') }}">

	<!-- Library - OWL Carousel V.2.0 beta -->
	<link rel="stylesheet" href="{{ asset('front-end/libraries/owl-carousel/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('front-end/libraries/owl-carousel/owl.theme.css') }}">

	<!-- Library - FlexSlider v2.5.0 -->
	<link rel="stylesheet" href="{{ asset('front-end/libraries/flexslider/flexslider.css') }}">

	<!-- Library - Animate CSS -->
	<link rel="stylesheet" href="{{ asset('front-end/libraries/animate/animate.min.css') }}">

	<!-- Custom - Common CSS -->
	<link rel="stylesheet" href="{{ asset('front-end/css/plugins.css') }}">
	<link rel="stylesheet" href="{{ asset('front-end/css/navigation-menu.css') }}">

	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" href="{{ asset('front-end/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('front-end/css/shortcodes.css') }}">
	<link rel="stylesheet" href="{{ asset('front-end/css/custom.css') }}">

	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<!-- Loader -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="loader-inner ball-clip-rotate">
				<div></div>
			</div>
		</div>
	</div><!-- Loader /- -->

	<a id="top"></a>
	<!-- Main Container -->
	<div class="main-container">
		<!-- Header -->
		<header class="header-main">
			<!-- Top Header -->
			<div class="top-header container-fluid no-padding">
				<!-- Container -->
				<div class="container">


					<div class="col-md-4 social no-bottom-margin pull-left">

						<div class="text-uppercase">Welcome to IMN Taxi Service in Kuwait</div>

					</div>
					<div class="col-md-8 pull-right top-menu">
						<ul class="no-bottom-margin">
							<li><a href="home/#booktaxifromhere">Book your Ride</a></li>

							<li><a href="Career">Become a Driver</a></li>
							<li><a href="Our-Blog">Blog</a></li>
							<li><a href="#">عربى</a></li>



						</ul>
					</div>
				</div><!-- Container /- -->
			</div><!-- Top Header /- -->

			<!-- Logo Block -->
			<div class="middle-header container-fluid no-padding">
				<!-- Container -->
				<div class="container">
					<div class="row">
						<div class="col-md-4 pull-left">
							<a href="home">
								<img src="{{ asset('front-end/img/logo.png')}}" alt="Logo" />
								<!-- <b>National Cab</b><span>Always there for you</span> -->
							</a>
						</div>
						<div class="col-md-8 pull-right top-20">
							<div class="row">
								<div class="col-md-8">
									<div class="location phone">
										<i class="fa fa-envelope-o fa-2x text-success"></i>
										<p>Email Address<span class="text-lowercase"> booking@imantaxiservice.com</span></p>
									</div>

								</div>
								<div class="col-md-4">
									<div class="phone">
										<i class="fa fa-phone fa-2x text-success"></i>

										<p>Call Us Any Time:<span> +965 502 20709</span></p>
									</div>
								</div>
							</div>


						</div>
					</div>

				</div><!-- Container /- -->
			</div><!-- Logo Block /- -->
			<nav class="navbar ow-navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand logo-block">
							<a href="home">
								<img src="{{ asset('front-end/images/logo.png')}}" alt="Logo" />
								<b>National Cab</b><span>Always there for you</span>
							</a>
						</div>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">



							<li class="active"><a href="home">Home</a></li>

							<!-- <li class="dropdown">
								<a href="#faq" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">About us</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">
									<li><a href="About-us.php">About us</a></li>
									<li><a href="Founder-Message.php">Founder Message</a></li>
									<li><a href="#">Mission and Vision</a></li>
									<li><a href="#">Founder Message</a></li>

								</ul>
							</li> -->
							<li><a href="About-us">About us</a></li>
							<li><a href="Our-Blog">Our Blog</a></li>
							<li><a href="Our-Services">Our Services</a></li>


							<li><a href="Career">Careers</a></li>


							<li><a href="testimonial">Testimonials</a></li>
							<li><a href="Contact-us">Contact us</a></li>
						</ul>
					</div>
					<a href="home/#booktaxifromhere">Book For A Ride</a>
				</div>
			</nav>
		</header><!-- Header /- -->