<?php
session_start();
include "config.php";
include "header.php";
?>
<!-- page details -->
	<div class="breadcrumb-mobamu">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Gallery</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- Gallery -->
	<section class="gallery py-5" id="gallery">
		<div class="container py-md-5">
			<h3 class="tittle text-center font-weight-bold">Our Gallery</h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">In our hotel there are three types of rooms are available.
			<font size="6"><br>Deluxe&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Super Deluxe&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Family Rooms</font>			
			</p>
			<div class="row news-grids no-gutters text-center">
				<div class="col-md-4 gal-img">
					<a href="#gal1"><img src="images/blog1.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal2"><img src="images/price1.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal3"><img src="images/blog2.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal4"><img src="images/price2.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal5"><img src="images/blog3.jpeg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal6"><img src="images/price3.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
			</div>
		</div>
	</section>
	<!-- gallery popups -->
	<!-- popup-->
	<div id="gal1" class="pop-overlay animate">
		<div class="popup">
			<img src="images/blog1.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal2" class="pop-overlay animate">
		<div class="popup">
			<img src="images/price1.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal3" class="pop-overlay animate">
		<div class="popup">
			<img src="images/blog2.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup3 -->
	<!-- popup-->
	<div id="gal4" class="pop-overlay animate">
		<div class="popup">
			<img src="images/price2.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal5" class="pop-overlay animate">
		<div class="popup">
			<img src="images/blog3.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal6" class="pop-overlay animate">
		<div class="popup">
			<img src="images/price3.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- //gallery popups -->
	<!-- //gallery -->

<?php
include "footer.php";
?>