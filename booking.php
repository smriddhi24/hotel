<?php
session_start();
if(!isset($_SESSION['userid']))
{
	echo "<script>window.location.assign('login.php')</script>";
}
include "config.php";
include "header.php";

		if(isset($_POST['submit']))
		{
			$rid = $_POST['rid'];	
		$user_id = $_POST['user_id'];	
		$in_date = $_POST['in_date'];
		$out_date = $_POST['out_date'];
		$adults = $_POST['adults'];
		$children = $_POST['children'];
		$message = $_POST['message'];
		$bname = $_POST['bname'];
		$bemail = $_POST['bemail'];
		$bphone = $_POST['bphone'];
		date_default_timezone_set('Asia/Kolkata');
		$date = date('d-m-Y');
		$time = date('H:i:s');
		$q="insert into `booking_request`(`rid`,`user_id`,`in_date`,`out_date`,`adults`,`children`,`message`,`bname`,`bemail`,`bphone`,`date`,`time`,`status`)values('$rid','$user_id','$in_date','$out_date','$adults','$children','$message','$bname','$bemail','$bphone','$date','$time','pending')";
		$res=mysqli_query($conn,$q);
		if($res)
		{
			echo "<div class='alert alert-success'>Thanks for booking</div>";
		}
		else
		{
			echo "<div class='alert alert-danger'>wrong email/password</div>";
		}
		}
?>

	<!-- page details -->
	<div class="breadcrumb-mobamu">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Booking Form</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- booking form -->
	<div class="register-w3 py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">Booking Form</h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3"></p>
			<div class="comment-top mt-5">
				<div class="comment-bottom mobamuinfo_mail_grid_right">
					<form action="" method="post">
						<div class="row">
							<div class="col-lg-6 form-group">
								<label>User id</label>
								<input class="form-control" type="text" name="user_id" placeholder="Type Here.." required="" value="<?php echo $_SESSION['userid'];?>" readonly="readonly">
							</div>
							<div class="col-lg-6 form-group">
								<label>Name</label>
								<input class="form-control" type="text" name="bname" placeholder="Type Here.." required="" value="<?php echo $_SESSION['username'];?>" readonly="readonly">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 form-group">
								<label>Email</label>
								<input class="form-control" type="email" name="bemail" placeholder="Email" required="" value="<?php echo $_SESSION['useremail'];?>" readonly="readonly">
							</div>
							<div class="col-lg-6 form-group">
								<label>Phone Number</label>
								<input class="form-control" type="text" name="bphone" placeholder="Phone Number" required=""value="<?php echo $_SESSION['userphone'];?>" readonly="readonly">
							</div>

						</div>
						<div class="row">
							<div class="col-lg-6 form-group date-plu">
								<label>Arrival Date</label>
								<input type="date" name="out_date" required="">
							</div>
							<div class="col-lg-6 form-group date-plu">
								<label>Departure Date</label>
								<input type="date" name="in_date" required="">
							</div>

						</div>
						<div class="row">
							<div class="col-lg-6 form-group">
								<label>Select Your Room</label>
								<select required="" class="form-control" name="rid">
									<option value="">Room Type</option>
									<?php
										$query="select * from `room`";
										$result=mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
											while($row=mysqli_fetch_array($result)){
												?>
												<option value="<?php echo $row['rid'];?>"><?php echo $row['name'];?></option>
												<?php
											}
											
										}
										else
										{
										?>
										<option value="">No Room Found!</option>
										<?php
										}
									?>
								</select>
							</div>
							<div class="col-lg-6 form-group">
								<label>No Of Adults</label>
								<select required="" class="form-control" name="adults">
									<option value="">No.of Adults </option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="4">3</option>
									<option value="4">4</option>
									<option value="4">5</option>
									<option value="4">6</option>
									<option value="4">7 more</option>
								</select>
							</div>
							<div class="col-lg-6 form-group">
								<label>No Of Children</label>
								<select class="form-control" name="children">
									<option value="">No.of Children</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="4">3</option>
									<option value="4">4</option>
									<option value="4">5</option>
									<option value="4">6</option>
									<option value="4">7 more</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label>Write Message</label>
							<textarea class="form-control" name="message" placeholder="Write Here.." required=""></textarea>
						</div>
						<button type="submit" class="btn submit mt-3" name="submit">Book Now</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //booking form -->


<?php

include "footer.php"
?>