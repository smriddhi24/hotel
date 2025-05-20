<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Welcome to King Hotel | About Us :: Arvind ak</title>
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
								<li><a href="user.php">User</a></li>
								<li><a href="message.php">Messages</a></li>
								<li>
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2">Categories <span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#">Categories <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
										<li><a href="adding.php" class="drop-text">ADD</a></li>
										<li><a href="view.php" class="drop-text">VIEW</a></li>
										<!--<li><a href="single.php" class="drop-text">Blog Details</a></li>
										<li><a href="index.php" class="drop-text">What We do</a></li>
										<li><a href="index.html" class="drop-text">Pricing</a></li>
										<!--<li><a href="#testi" class="drop-text">Testimonials</a></li>
										<li><a href="book.html" class="drop-text">Booking Form</a></li>-->
									</ul>
								</li>
								<li>
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2">Booking<span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#">Booking <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
										<li><a href="all.php" class="drop-text">All</a></li>
										<li><a href="pending.php" class="drop-text">Pending</a></li>
										<li><a href="approve.php" class="drop-text">Approve</a></li>
										<li><a href="disapprove.php" class="drop-text">Disapprove</a></li>
										</ul>
								</li>
								
								<!--<li><a href="contact.html">Contact</a></li>-->
								<?php
								if(isset($_SESSION['adminid']))
								{
																echo '<li><a href="logout.php">Logout</a></li>';
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
		<div class="banner_w3lspvt-2">

		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->