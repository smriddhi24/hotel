<?php
	session_start();
	include "config.php";
	
	include "header.php";
	if(isset($_POST['submit']))
	{
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["Phone"];
	$address = $_POST["address"];
	$password = $_POST["password"];
	$q= "insert into `user`(`name`,`email`,`phone_number`,`address`,`password`)values('$name','$email','$phone','$address','$password')";
	$res=mysqli_query($conn,$q);
	if($res)
	{
		//echo "<div class='alert alert-success'>Register Successfuly. Kindly login</div>;";
		echo "<script>window.location.assign('login.php');</script>";
		
	}
	else
	{
		//echo mysqli_error($conn);
		echo "<div class='alert alert-danger'>not submit</div>;";
	}
	}
?>
<!-- page details -->
	<div class="breadcrumb-mobamu">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php" class="active">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Register Form</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- booking form -->
	<div class="register-w3 py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">Register Form</h3>
			<!--<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Sed do eiusmod tempor incididunt ut labore et dolore
				magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>-->
			<div class="comment-top mt-5">
				<div class="comment-bottom mobamuinfo_mail_grid_right">
					<form action="" method="post" alt="">
											<div class="row">
							<div class="col-lg-12 form-group">
								<label>Name</label>
								<input class="form-control" type="text" name="name"  title="Please enter the minimum 3 character" pattern="[A-Za-z ]{3,20}" placeholder="Enter your name" required="required">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>Email</label>
								<input class="form-control" type="email" name="email" pattern="[a-z0-9@.]{1,}" title="Please enter the minimum 3 character" placeholder="Email" required="required">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>Phone-number</label>
								<input class="form-control" type="text" name="Phone" pattern="[0-9]{10}" placeholder="Enter your number" required="required">
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12 form-group">
								<label>Address</label>
								<textarea class="form-control" type="text" name="address" placeholder="Enter your address" required="required"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>Password</label>
								<input class="form-control" type="password" name="password" pattern="[a-z0-9]{8}" placeholder="Password" required="" title="Please Enter only 8 digit Password">
							</div>
						</div>
						<input type="submit" class="btn submit mt-3 btn-primary" name="submit">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //booking form -->
<?php
	include "footer.php";
?>