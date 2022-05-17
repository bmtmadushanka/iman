@include('front-end/inc/header')



<!-- Banner Section -->
<div id="page-banner" class="page-banner faq-banner container-fluid no-padding">
	<div class="page-heading">
		<h3>Contact Us</h3>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active"><a href="#">Contact</a></li>
		</ol>
	</div>
</div><!-- Banner Section /- -->



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