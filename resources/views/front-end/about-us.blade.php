@include('front-end/inc/header')

<!-- Banner Section -->
<div id="page-banner" class="page-banner faq-banner container-fluid no-padding">
	<div class="page-heading">
		<h3>About Us</h3>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active"><a href="#">About Us</a></li>
		</ol>
	</div>
</div><!-- Banner Section /- -->


<div class="container-fluid no-padding app">
	<div class="container">
		<div class="section-padding"></div>
		<div class="col-md-6">
			<div class="get-mobile ">
				<h3 class="text-right">Welcome to</h3>
				<h2 class="text-right">IMN Taxi Service</h2>
				<p class="text-right">
					You can order a Kuwaiti taxi delivery service at any time of the day,
					Drivers of the best employees, we strive for excellence in the field of distribution </p>

				<p class="text-right">In the taxi industry and they have high professional ethics, we strive to provide service. </p>

				<p class="text-right">Everywhere in Kuwait Governorate and all the areas that govern it, we are distinguished in speed and quality
				</p>
			</div>
			<div class="section-padding"></div>
		</div>
		<div class="col-md-6 pull-right app-bb">
			<img src="{{ asset('front-end/img/about-us.jpg')}}" alt="app">
		</div>
	</div>
</div>

<!-- Counter Style2 -->
<div id="counter" class="container-fluid no-padding counter-style2">
	<div class="section-padding"></div>
	<div class="container">
		<!-- Counter -->
		<div class="counter">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="statistics-box">
					<h3><span>Successful Drives</span></h3>
					<i class="statistics-icon"><img src="{{ asset('front-end/images/icon/car.png')}}" alt="statistics-icon" /></i>
					<span id="statistics_count-1" data-statistics_percent="2000"></span>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="statistics-box">
					<h3><span>Happy Customers</span></h3>
					<i class="statistics-icon"><img src="{{ asset('front-end/images/icon/thumb-up.png')}}" alt="statistics-icon" /></i>
					<span id="statistics_count-2" data-statistics_percent="2000"></span>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="statistics-box">
					<h3><span>Talented Drivers</span></h3>
					<i class="statistics-icon"><img src="{{ asset('front-end/images/icon/driver.png')}}" alt="statistics-icon" /></i>
					<span id="statistics_count-3" data-statistics_percent="350"></span>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="statistics-box">
					<h3><span>Location Covered</span></h3>
					<i class="statistics-icon"><img src="{{ asset('front-end/images/icon/milestone.png')}}" alt="statistics-icon" /></i>
					<!-- <span id="statistics_count-4" data-statistics_percent="148"></span> -->
					<span >All Kuwait</span>
				</div>
			</div>
		</div><!-- Counter/- -->
	</div>
	<div class="section-padding"></div>
</div><!-- Counter Style2 /- -->


<div class="container-fluid no-padding app">
	<div class="container">
		<div class="section-padding"></div>
		<div class="col-md-6">
			<div class="get-mobile ">
				<h3 class=" text-right">IMN Taxi</h3>
				<h2 class=" text-right">Founder's Message</h2>
				<p class="text-right">Lorem ipsum dolor sit, amet Quod optio maxime nihil quae quaerat!
					Accusantium consequatur dignissimos illo eos voluptatibus rerum? Lorem ipsum dolor, sit amet Rem debitis velit qui
					maiores obcaecati? Fuga saepe repudiandae, id sint dolores accusamus! Lorem ipsum dolor, sit amet Rem debitis velit qui
					maiores obcaecati? Fuga saepe repudiandae, id sint dolores accusamus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, sunt enim iure velit nobis, perferendis voluptatem error ducimus explicabo, saepe tempore rerum laboriosam eligendi earum odit? Saepe iusto ipsa.</p>
			</div>
			<div class="section-padding"></div>
		</div>
		<div class="col-md-6 pull-right app-bb">
			<img src="{{ asset('front-end/img/mobile-app.png')}}" alt="app">
		</div>
	</div>
</div>




@include('front-end/inc/footer')