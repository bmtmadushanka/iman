@include('front-end/inc/header')



<!-- Photo Slider -->
<div class="container-fluid photos-slider no-padding">
	<div id="photos-slider" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="{{ asset('front-end/images/photos-slider/photo-slide-1.jpg')}}" alt="side-1" />
				<div class="carousel-caption">
					<h2>A reliable way to travel</h2>
					<p>Come and listen to a story about a man named Jed a poor mountaineer barely kept his
						family fed so lets make the most of this beautiful day since we are together it is a
						beautiful day in this neighborhood a beautiful day for a neighbor</p>
					<a href="#" class="purchase">Bookings</a>
					<a href="#" title="See More" class="see-more">Learn More</a>
				</div>
			</div>
			<div class="item">
				<img src="{{ asset('front-end/images/photos-slider/photo-slide-2.jpg')}}" alt="side-2" />
				<div class="carousel-caption">
					<h2>A reliable way to travel</h2>
					<p>Come and listen to a story about a man named Jed a poor mountaineer barely kept his
						family fed so lets make the most of this beautiful day since we are together it is a
						beautiful day in this neighborhood a beautiful day for a neighbor</p>
					<a href="#" class="purchase">Bookings</a>
					<a href="#" class="see-more">Learn More</a>
				</div>
			</div>
		</div>
	</div>
</div><!-- Photo Slider/- -->

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


<!-- Choose Us -->
<div class="container-fluid no-padding choose-us">
	<div class="section-padding"></div>
	<!-- Container -->
	<div class="container">
		<div class="section-header">
			<h3>What We Do ( Our Services)</h3>
		</div>
		<!-- Choose Carousel -->
		<div class="choose-carousel">
			<div class="col-md-12">
				<div class="choose-us-box">
					<div class="choose-img-box"><img src="{{ asset('front-end/images/choose-us/choose-us-1.jpg')}}" alt="choose-us-1" />
					</div>
					<div class="choose-us-content-box text-right">
						<h3>Trust And Safety</h3>
						<p>The first mate and his Skipper too will do their very best to make the others in
							their tropic island nest the year.</p>
						<a href="#">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="choose-us-box">
					<div class="choose-img-box"><img src="{{ asset('front-end/images/choose-us/choose-us-2.jpg')}}" alt="choose-us-2" />
					</div>
					<div class="choose-us-content-box">
						<h3>Feel The Comfort</h3>
						<p>The first mate and his Skipper too will do their very best to make the others in
							their tropic island nest the year.</p>
						<a href="#">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="choose-us-box">
					<div class="choose-img-box"><img src="{{ asset('front-end/images/choose-us/choose-us-3.jpg')}}" alt="choose-us-3" />
					</div>
					<div class="choose-us-content-box">
						<h3>Experienced Drivers</h3>
						<p>The first mate and his Skipper too will do their very best to make the others in
							their tropic island nest the year.</p>
						<a href="#">Read More</a>
					</div>
				</div>
			</div>
		</div><!-- Choose Carousel/- -->
	</div><!-- Container/- -->
	<div class="section-padding"></div>
</div><!-- Choose Us/- -->

<!-- Book Details -->
<div class="container-fluid no-padding book-details" id="booktaxifromhere">
	<div class="section-padding"></div>
	<!-- Container -->
	<div class="container">
		<div class="section-header">
			<h3>Book For a Ride</h3>
		</div>
		<!-- Booking Details Form -->
		<form class="booking-details-form">
			<div class="form-group col-md-3 col-sm-4 col-xs-12">
				<label>Name</label>
				<input type="text" class="form-control" id="name" placeholder="Enter Your Name Here">
			</div>
			<div class="form-group col-md-3 col-sm-4 col-xs-12">
				<label>Phone Number</label>
				<input type="text" class="form-control" id="phone" placeholder="+(01) xxx - xxx - xx">
			</div>
			<div class="form-group col-md-3 col-sm-4 col-xs-12">
				<label>From</label>
				<input type="text" class="form-control" id="from" placeholder="Starting Place">
			</div>
			<div class="form-group col-md-3 col-sm-4 col-xs-12">
				<label>To</label>
				<input type="text" class="form-control" id="destination" placeholder="Destination">
			</div>
			<div class="form-group col-md-4 col-sm-8 col-xs-12">
				<label>Date &amp; Time</label>
				<div class="row date-time">
					<div class="col-md-6 col-sm-6 col-xs-6"><input type="text" class="form-control" id="date_time" placeholder="DD/MM/YYYY"></div>
					<div class="col-md-3 col-sm-3 col-xs-3"><input type="text" class="form-control" id="hours" placeholder="HH"></div>
					<div class="col-md-3 col-sm-3 col-xs-3"><input type="text" class="form-control" id="month" placeholder="MM"></div>
				</div>
			</div>
			<div class="form-group col-md-2 col-sm-4 col-xs-12">
				<label>Passenger</label>
				<input type="number" class="form-control" id="passenger" placeholder="4">
			</div>
			<div class="form-group col-md-3 col-sm-4 col-xs-12">
				<label>Class</label>
				<select class="form-control" id="class">
					<option>Business</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>
			</div>
			<div class="form-group col-md-3 col-sm-4 col-xs-12">
				<button type="submit" class="btn">Book Your Trip</button>
			</div>
		</form><!-- Booking Details Form/- -->
	</div><!-- Container/- -->
	<div class="section-padding"></div>
</div><!-- Book Details/- -->




<!-- - Blog -->
<div class="container-fluid no-padding blog">
	<div class="section-padding"></div>
	<div class="container">
		<div class="section-header">
			<h3>Recent Updates From Our Blog</h3>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<article class="blog-post-list">
					<div class="entry-cover text-right">
						<a href="#"><img src="{{ asset('front-end/images/blog/blog-1.jpg')}}" alt="blog-1" /></a>
						<div class="post-meta">
							<img src="{{ asset('front-end/images/icon/photo.png')}}" alt="photo" />
						</div>
						<div class="entry-meta">
							<div class="meta-inner">
								<div class="by-line pull-left">Posted By <a href="#">Admin</a></div>
								<div class="post-comment pull-right">
									<a href="#"><i class="fa fa-comment"></i>Comments<span>14</span></a>
								</div>
							</div>
							<div class="meta-inner">
								<div class="post-date pull-left"><span>On 22 Aug 2015</span></div>
								<div class="tags pull-right">
									<i class="fa fa-tag"></i>
									<a href="#">Cab</a>
									<a href="#">Taxi</a>
									<a href="#">Rent</a>
									<a href="#">Hire</a>
									<a href="#">Trip</a>
								</div>
							</div>
						</div>
					</div>
					<div class="blog-content">
						<h3 class="entry-title  text-right">Well Trained Drivers On Duty</h3>
						<div class="entry-content text-right">
							<p>Fleeing from the Cylon tyranny the last Battlestar leads a rag tag fugitive fleet
								on a lonely quest a</p>
							<a href="#" title="Read More" class="pull-right">Read More</a>
						</div>
					</div>
				</article>
			</div>

		</div>
	</div>
	<div class="section-padding"></div>
</div><!-- - Blog/-  -->


<!-- Testimonial -->
<div class="container-fluid no-padding testimonial">
	<img src="{{ asset('front-end/images/border-pattern.jpg')}}" alt="border" />
	<div class="section-padding"></div>
	<div class="container">
		<div class="section-header">
			<h3>Words from Our Customers</h3>
			<div id="testimonial-slider" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<p><i class="fa fa-quote-left"></i>Now the world do not move to the beat of just one drum
							what might be right for you may not be right for some makin their way the only way they
							know how that's just a little bit more than the law will allow wouldn't you like<i class="fa fa-quote-right"></i></p>
						<div class="testimonial-profile">

							<img src="https://i.pinimg.com/originals/9d/53/6c/9d536c9dc08df0592de379418f820432.jpg" class="img-circle " alt="">

						</div>

						<span>Aabdeen Aabdeen</span>
					</div>

				</div>
			</div>
		</div>

	</div>

	<img src="{{ asset('front-end/images/border-pattern.jpg')}}" alt="border" />
</div><!-- Testimonial/- -->



<!-- Contact Form -->
<div class="contact-form container-fluid no-padding ">
	<div class="section-padding"></div>
	<!-- Container -->
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-sm-12">
				<div class="section-header text-center">
					<h3>Contact Infomation</h3>
				</div><!-- Section Header -->
				<form class="row" id="contact-form" method="post">
					<div class="col-md-6 col-sm-6 form-group">
						<input type="text" class="form-control" id="input_name" name="contact-name" placeholder="First Name" required>
					</div>

					<div class="col-md-6 col-sm-6 form-group">
						<input type="text" class="form-control" id="input_name" name="contact-name" placeholder="Last Name" required>
					</div>
					<div class="col-md-6 col-sm-6 form-group">
						<input type="email" class="form-control" id="input_email" name="contact-email" placeholder="E-mail Address" required>
					</div>
					<div class="col-md-6 col-sm-6 form-group">
						<input type="text" class="form-control" id="input_phone" name="contact-phone" placeholder="Telephone" required>
					</div>
					<div class="col-md-12 col-sm-6 form-group">
						<input type="text" class="form-control" id="input_subject" name="contact-subject" placeholder="Subject" required>
					</div>
					<div class="col-md-12 col-sm-12 form-group">
						<textarea class="form-control" rows="8" cols="50" id="textarea_message" name="contact-message" placeholder="Message:" required></textarea>
					</div>
					<div class="col-md-12">
						<button type="submit" id="btn_submit" class="btn btn-default  w-100">Send Message</button>
					</div>
					<div id="alert-msg" class="alert-msg"></div>
				</form>
			</div>
			<div class="col-md-4">
				<div class="fh-contact-box  style-1 bg-white">
					<h3 class="contact-box-title">Contact Details</h3>
					<div class="info">
						<div class="info-item"><span class="fh-icon"><i class="fa fa-location-arrow"></i></span>
							<div class="details">Available in All Kuwait.
							</div>
						</div>
						<div class="info-item"><span class="fh-icon"><i class="fa fa-phone"></i></span>
							<div class="details">+965 502 20709
							</div>
						</div>
						<div class="info-item"><span class="fh-icon"><i class="fa fa-envelope"></i></span>
							<div class="details">booking@imantaxiservice.com</div>
						</div>

						<div class="info-item"><span class="fh-icon"><i class="fa fa-facebook"></i></span>
							<div class="details">IMN Taxi Service</div>
						</div>
						<div class="info-item"><span class="fh-icon"><i class="fa fa-twitter"></i></span>
							<div class="details">IMN Taxi Service</div>
						</div>
						<div class="info-item"><span class="fh-icon"><i class="fa fa-whatsapp"></i></span>
							<div class="details">+965 502 20709</div>
						</div>
						<div class="info-item"><span class="fh-icon"><i class="fa fa-clock-o"></i></span>
							<div class="details">24/7 Available</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div><!-- Container /- -->
	<div class="section-padding"></div>
</div><!-- Contact Form /- -->
@include('front-end/inc/footer')