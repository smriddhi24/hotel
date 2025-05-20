

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title> Welcome to King Hotel | About Us :: Arvind ak</title> 
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
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->
<!-- single page -->
	
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
						<h1><a href="index.php"><font size="10px">King Hotel</font></a></h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" name="checkbox"/>
							<ul class="menu">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="about.php">About Us</a></li>
								<li><a href="gallery.php">Gallery</a></li>
								
								<li>
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2">Categories <span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="">Categories <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" name="checkbox"/>
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
										<!--<li><a href="index.php" class="drop-text">ADD</a></li>
										<li><a href="index.php" class="drop-text">VIEW</a></li>-->
										<!--<li><a href="single.html" class="drop-text">Blog Details</a></li>
										<li><a href="index.html" class="drop-text">What We do</a></li>
										<li><a href="index.html" class="drop-text">Pricing</a></li>
										<li><a href="#testi" class="drop-text">Testimonials</a></li>
										<li><a href="book.html" class="drop-text">Booking Form</a></li>-->
									</ul>
								</li> 
								<li><a href="contact.php">Contact</a></li>
								
								<li><a href="booking.php">Booking</a></li>
								
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
		<div class="banner_w3lspvt-2">

		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->