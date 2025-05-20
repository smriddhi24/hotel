<?php
	session_start();
	include "config.php";
	include "header.php";
		if(isset($_POST['submit']))
		{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$q = "insert into `contact` (`name`,`email`,`phone_number`,`message`)values('$name','$email','$phone','$message')";
	$res=mysqli_query ($conn,$q);
	if($res)
	{
		echo "<div class='alert alert-success'>Thank you for Contacting us</div>;";
	}
	else
	{
		echo "<div class='alert alert-danger'>Try Again</div>;";
	}
		}
?>
	<!-- page details -->
	<div class="breadcrumb-mobamu">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Contact</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- contact -->
	<section class="contact py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">Contact</h3>
			<!--<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Sed do eiusmod tempor incididunt ut labore et dolore
				magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>-->
			<ul class="list-unstyled row text-left pt-4 mb-lg-5">
				<li class="col-lg-4 adress-info mb-lg-0 mb-5">
					<div class="row">
						<div class="col-3 text-lg-center text-sm-right text-center adress-icon">
							<span class="fa fa-map-marker"></span>
						</div>
						<div class="col-9 text-left">
							<h6>Location</h6>
							<p>Model Town
							<br>Near KFC </p>
						</div>
					</div>
				</li>
				<li class="col-lg-4 adress-info mb-lg-0 mb-5">
					<div class="row">
						<div class="col-3 text-lg-center text-sm-right text-center adress-icon">
							<span class="fa fa-envelope-open-o"></span>
						</div>
						<div class="col-9 text-left">
							<h6>Email</h6>
							<a href="mailto:info@example.com">ak2877045@gmail.com</a>
							<br>
							<a href="mailto:info@example.com">rahulroy@gmail.com</a>
						</div>
					</div>
				</li>
				<li class="col-lg-4 adress-info mb-lg-0 mb-5">
					<div class="row">
						<div class="col-3 text-lg-center text-sm-right text-center adress-icon">
							<span class="fa fa-phone"></span>
						</div>
						<div class="col-9 text-left">
							<h6>Phone Number</h6>
							<p>9876077024</p>
							<p>7340706483</p>
						</div>
					</div>
				</li>
			</ul>
			<div class="contact-form mx-auto text-left mt-lg-5 mt-4">
				<form name="contactform" id="contactform1" method="post" action="">
					<div class="row">
						<div class="col-lg-4 con-gd">
							<div class="form-group" data-aos="fade-up">
								<label>Name *</label>
								<input type="text" class="form-control" id="name" placeholder=" Enter the name" name="name" required="required">
							</div>
						</div>
						<div class="col-lg-4 con-gd">
							<div class="form-group" data-aos="fade-up">
								<label>Email *</label>
								<input type="email" class="form-control" id="email" placeholder="Enter the email" name="email" required="required">
							</div>
						</div>
						<div class="col-lg-4 con-gd">
							<div class="form-group" data-aos="fade-up">
								<label>Phone No. *</label>
								<input type="text" class="form-control" id="phone" placeholder="Enter the phone number" name="phone" required="required">
							</div>
						</div>

					</div>

					<div class="form-group mb-5">
						<label>Message</label>
						<textarea name="message" class="form-control" id="iq" placeholder="Write a message" required="required"></textarea>
					</div>
					<div class="contact-page">
						<button type="submit" class="btn btn-default" name="submit">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- //contact -->
<?php
	include "footer.php";
?>