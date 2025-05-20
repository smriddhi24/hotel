<?php
session_start();
include "config.php";
if(!isset($_SESSION['adminid']))
	{
		echo "<script>window.location.assign('login.php');</script>";
	}
	include "header.php";
	
	if(!isset($_SESSION['adminemail']))
	{
		echo "<script>window.location.assign('login.php');</script>";
		
	}
?>
<!-- why -->
	<div class="serives py-5" id="why">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">WELCOME</h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">&nbsp;</p>
			<div class="row text-center">
				<div class="col-lg-3 col-md-6 ser-grid">
					<span class="fa fa-bed"></span>
					<h4><?php
					$q="select count(`rid`) from `room`";
					$res=mysqli_query($conn,$q);
					$row=mysqli_fetch_array($res);
					echo $row[0];
					?></h4>
					<p>Total Room Categories</p>
				</div>
				<div class="col-lg-3 col-md-6 ser-grid mt-md-0 mt-5">
					<span class="fa fa-user-secret"></span>
				<h4><?php
					$q="select count(`userid`) from `user`";
					$res=mysqli_query($conn,$q);
					$row=mysqli_fetch_array($res);
					echo $row[0];
					?></h4>	
					<p>Total Users</p>
				</div>
				<div class="col-lg-3 col-md-6 ser-grid mt-lg-0 mt-5">
					<span class="fa fa-comments"></span>
					<h4><?php
					$q="select count(`cid`) from `contact`";
					$res=mysqli_query($conn,$q);
					$row=mysqli_fetch_array($res);
					echo $row[0];
					?></h4>
					<p>Total Messages</p>
				</div>
				<div class="col-lg-3 col-md-6 ser-grid mt-lg-0 mt-5">
					<span class="fa fa-bell"></span>
					<h4><?php
					$q="select count(`bid`) from `booking_request` where `status`='pending'";
					$res=mysqli_query($conn,$q);
					$row=mysqli_fetch_array($res);
					echo $row[0];
					?></h4>
					<p>Pending Booking</p>
				</div>
			</div>
		</div>
	</div>
	<!-- why -->

<?php
	include "footer.php";
?>