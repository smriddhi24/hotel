<?php
	session_start();
	include "header.php";
	include "config.php";
	if(isset($_POST["submit"]))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$q="select * from `admin` where `email`='$email' and `password`='$password'";
		$res=mysqli_query($conn,$q);
		if(mysqli_num_rows($res)>0)
		{
			$rows=mysqli_fetch_array($res);
			$_SESSION ['adminid']=$rows['id'];
			$_SESSION ['adminname']=$rows['name'];
			$_SESSION ['adminemail']=$rows['email'];
			$_SESSION ['adminpassword']=$rows['password'];
		
			echo "<script>window.location.assign('index.php')</script>";
			
		}
		else
		{
			echo"<div class='alert alert-danger'>wrong email/password?</div>";
		}
	}
	
?>
<!-- page details -->
	<div class="breadcrumb-mobamu">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Login Form</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- booking form -->
	<div class="register-w3 py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">Login Form</h3>
			<!--<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Sed do eiusmod tempor incididunt ut labore et dolore
				magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>-->
			<div class="comment-top mt-5">
				<div class="comment-bottom mobamuinfo_mail_grid_right">
					<form action="" method="post">
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>Email</label>
								<input class="form-control" type="email" name="email" placeholder="Email" required="required">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>Password</label>
								<input class="form-control" type="password" name="password" placeholder="Password" required="required">
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





















