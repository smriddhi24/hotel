

<?php
	session_start();
	if(!isset($_SESSION['adminid']))
	{
		echo "<script>window.location.assign('login.php');</script>";
	}

	include "config.php";
	include "header.php";
	if(!isset($_SESSION['adminid']) ){
		echo "<script>window.location.assign('login.php');</script>";
	}
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$price = $_POST['price'];
		$facilities = $_POST['facilities'];
		$description = $_POST['description'];
		$pic = rand(0,99999999).$_FILES['pic']['name'];
		$quantity = $_POST['quantity'];
		$q = "insert into `room` (`name`,`price`,`facilities`,`description`,`pic`,`quantity`) values('$name','$price','$facilities','$description','$pic','$quantity')";
		$res = mysqli_query($conn,$q);
		if ($res)
		{
			move_uploaded_file($_FILES['pic']['tmp_name'],'upload/'.$pic);
			echo "<div class='alert alert-success'>Data Inserted!</div>";
		}
		else
		{
			echo mysqli_error($conn);
			//echo "<div class='alert alert-danger'>Try Again!</div>";
		}
	
	}
?>
<!-- page details -->
	<div class="breadcrumb-mobamu">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Add Page</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- booking form -->
	<div class="register-w3 py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">Categories</h3>
			<!--<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Sed do eiusmod tempor incididunt ut labore et dolore
				magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>-->
			<div class="comment-top mt-5">
				<div class="comment-bottom mobamuinfo_mail_grid_right">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>Name</label>
								<input class="form-control" type="name" name="name" placeholder="Enter your Name" required="required">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>Price</label>
								<input class="form-control" type="text" name="price" placeholder="Enter your price" required="required">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>Facilites</label>
								<input class="form-control" type="text" name="facilities"  required="required">
							</div>
						</div>
						
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>Description</label>
								<textarea class="form-control" type="text" name="description" >	</textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>picture</label>
								<input class="form-control" type="file" name="pic" required="required">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>quantity</label>
								<input class="form-control" type="text" name="quantity" required="required">
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