<?php
	session_start();
	if(!isset($_SESSION['adminid']))
	{
		echo "<script>windown.location.assign('login.php');</script>";
	}
	include "header.php";
?>
<!-- page details -->
	<div class="breadcrumb-mobamu">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Add Categories</li>
		</ol>
	</div>
<!-- //page details -->
<!-- booking form -->
	<div class="register-w3 py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">Add Category</h3>
			
			<div class="comment-top mt-5">
				<div class="comment-bottom mobamuinfo_mail_grid_right">
					<form action="#" method="post">
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>Email</label>
								<input class="form-control" type="email" name="email" placeholder="Email" required="">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>Password</label>
								<input class="form-control" type="password" name="password" placeholder="Password" required="">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>Address</label>
								<textarea class="form-control" name="address" placeholder="Address" required=""></textarea>
							</div>
						</div>
						<input type="submit" class="btn submit mt-3 btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //booking form -->
<?php
	include "footer.php";
?>