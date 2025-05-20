
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Welcome to King Hotel | Home :: W3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Villas Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<!-- banner slider -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
					<!-- logo -->
					<div id="logo">
						<h1><a href="index.php">King Hotel</a></h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="about.php">About Us</a></li>
								<li><a href="gallery.php">Gallery</a></li>
								<li>
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2">Categories <span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="">Categories <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
										<?php
									 $query ="select * from `room`";
									 $result = mysqli_query($conn,$query);
									 if(mysqli_num_rows($result)>0){
										 while($rows = mysqli_fetch_array($result)){
											 echo '<li><a href="single.php?id='.$rows['rid'].'" class="drop-text">'.$rows['name'].'</a></li>';
										 }
									 }
									?>
										<!--<li><a href="single.php" class="drop-text">Blog Details</a></li>
										<li><a href="#why" class="drop-text">What We do</a></li>
										<li><a href="#price" class="drop-text">Pricing</a></li>
										<li><a href="#testi" class="drop-text">Testimonials</a></li>
										<li><a href="book.php" class="drop-text">Booking Form</a></li>-->
									</ul>
								</li>
								<li><a href="contact.php">Contact</a></li>
								<!--<li><a href="register.php">Register</a></li>-->
								<li><a href="booking.php">Booking</a></li>
								<!--<li><a href="logout.php">logout</a></li>-->
								<?php
								if(isset($_SESSION['userid']))
								{
									
								 echo	('<li><a href="myb.php">My Booking</a></li>');
								 echo	('<li><a href="logout.php">Logout</a></li>');
								}
								else{
								 echo ('	<li><a href="register.php">Register</a></li>');
								 echo ('	<li><a href="login.php">Login</a></li>');
								}
								?>
		
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
		<div class="banner_w3lspvt">
			<div class="csslider infinity" id="slider1">
				<input type="radio" name="slides" checked="checked" id="slides_1" />
				<input type="radio" name="slides" id="slides_2" />
				<input type="radio" name="slides" id="slides_3" />
				<input type="radio" name="slides" id="slides_4" />
				<ul class="banner_slide_bg">
					<li>
						<div class="container">
							<div class="w3ls_banner_txt">
								<p>Welcome to our King Hotel</p>
								<h3 class="w3ls_pvt-title text-wh text-uppercase let">Hotel Room Booking</h3>
								<!--<a href="about.php" class="btn button-style mt-sm-5 mt-4">Read More</a>-->
							</div>
						</div>
					</li>
					<li>
						<div class="container">
							<div class="w3ls_banner_txt">
								<p>Welcome to our King Hotel</p>
								<h3 class="w3ls_pvt-title text-wh text-uppercase let">Enjoy Your Moments</h3>
								<!--<a href="about.php" class="btn button-style mt-sm-5 mt-4">Read More</a>-->
							</div>
						</div>
					</li>
					<li>
						<div class="container">
							<div class="w3ls_banner_txt">
								<p>Welcome to our King Hotel</p>
								<h3 class="w3ls_pvt-title text-wh text-uppercase let">Modern & Specious Rooms</h3>
								<!--<a href="about.php" class="btn button-style mt-sm-5 mt-4">Read More</a>-->
							</div>
						</div>
					</li>
					<li>
						<div class="container">
							<div class="w3ls_banner_txt">
								<p>Welcome to our King Hotel</p>
								<h3 class="w3ls_pvt-title text-wh text-uppercase let">In the Perfect Location</h3>
								<!--<a href="about.php" class="btn button-style mt-sm-5 mt-4">Read More</a>-->
							</div>
						</div>
					</li>
				</ul>
				<div class="arrows">
					<label for="slides_1"></label>
					<label for="slides_2"></label>
					<label for="slides_3"></label>
					<label for="slides_4"></label>
				</div>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

	<!-- banner bottom -->
	<div class="banner-bottom py-5">
		<div class="d-md-flex container py-xl-3 py-lg-3">
			<div class="banner-left-bottom-w3ls">
			<!--<h6 class="text-wh let">Sed do eiusmod tempor</h6>-->
				<h3 class="text-wh my-3">Welcome to our King Hotel</h3>
				<p>Enjoy Your Every Moments With Your Partner In King Hotel.<br><!--Sed do eiusmod tempor incididunt ut
					labore.</p>-->
			</div>
			<div class="button offset-lg-2 offset-md-1">
				<!--<a href="" class="btn w3ls-button-mobamu">Read More</a>-->
			</div>
		</div>
	</div>
	<!-- //banner bottom -->