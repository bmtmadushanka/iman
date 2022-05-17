@include('front-end/inc/header')


<div class="main-container">
	<!-- Header -->


	<!-- Banner Section -->
	<div id="page-banner" class="page-banner blog-banner container-fluid no-padding">
		<div class="page-heading">
			<h3>Become A Driver</h3>
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>

				<li class="active"><a href="#">Become A Driver</a></li>
			</ol>
		</div>
	</div><!-- Banner Section /- -->

	<!-- Page Content -->
	<div class="container-fluid no-padding page-content book-taxi-online-form">
		<!-- Page Content -->
		<div class="section-padding"></div>
		<!-- Container -->
		<div class="container">
			<!-- Blog Area -->
			<div class="col-md-12 blog-area">
				<div class="section-header">
					<h3>Become A Driver</h3>
				</div>
				<!-- Online Booking Form -->
				<form class="online-booking-form row">
					<h4>Personal Details</h4>
					<div class="form-group col-md-6 col-sm-12 col-xs-12">
						<label>Full Name</label>
						<input type="text" class="form-control" id="name" placeholder="Full Name">
					</div>
					<div class="form-group col-md-6 col-sm-12 col-xs-12">
						<label>Telephone</label>
						<input type="text" class="form-control" id="phone" placeholder="Telephone">
					</div>
					<div class="form-group col-md-6 col-sm-12 col-xs-12">
						<label>E-Mail</label>
						<input type="email" class="form-control" id="email" placeholder="E-Mail Address">
					</div>
					<div class="form-group col-md-6 col-sm-12 col-xs-12">
						<label>State</label>
						<select class="form-control">
							<option>Select Your State</option>
							<option>USA</option>
							<option>Florida</option>
						</select>
					</div>
					<div class="form-group col-md-6 col-sm-12 col-xs-12">
						<div class="input-group col-md-12 col-sm-12">
							<label>City</label>
							<select class="form-control">
								<option>Select Your City</option>
								<option>Kuwait 1</option>
								<option>Kuwait 2</option>
							</select>
						</div>
						<div class="input-group col-md-12 col-sm-12 col-xs-12">
							<label>Zip Code</label>
							<input type="text" class="form-control" id="zip_code" placeholder="Postal Code">
						</div>
					</div>
					<div class="form-group col-md-6 col-sm-12 col-xs-12">
						<label>Message</label>
						<textarea name="message" class="form-control" rows="5" placeholder="Message"></textarea>
					</div>


					<div class="form-group col-md-6 col-sm-12 col-xs-12">
						<button type="submit" class="btn">Submit Application</button>
					</div>

				</form><!-- Online Booking Form/- -->
			</div>


		</div><!-- Container/- -->
		<div class="section-padding"></div>
	</div><!-- Page Content/- -->



</div>

@include('front-end/inc/footer')