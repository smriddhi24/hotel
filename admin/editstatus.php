<?php
	session_start();
include "config.php";
if(!isset($_SESSION['adminid']))
	{
		echo "<script>window.location.assign('login.php');</script>";
	}

include "header.php";
$bid = $_GET['id'];
if(isset($_POST['submit'])){
$status = $_POST['status'];

$query = "update `booking_request` set `status`='$status' where `bid`='$bid'";
$result = mysqli_query($conn,$query);
if($result){
	echo "<script>window.location.assign('all.php?ok=0');</script>";
}
else{
	echo "<div class='alert alert-danger'>Try Again</div>";
}
} 

?>
<!-- //page details -->
<!-- booking form -->
	<div class="register-w3 py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">Update</h3>
			
			<div class="comment-top mt-5">
				<div class="comment-bottom mobamuinfo_mail_grid_right">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>Booking Id</label>
								<input class="form-control" type="text" name="bid" value="<?php echo $bid;?>" readonly="readonly" required="required">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>Status</label>
								<select class="form-control"  name="status" required="required">
									<option value="approved">Approved</option>
									<option value="disapproved">Disapproved</option>
								</select>
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
