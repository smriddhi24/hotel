<?php
	session_start();
	if(!isset($_SESSION['adminid']))
	{
		echo "<script>window.location.assign('login.php');</script>";
	}

include "config.php";
include "header.php";
$id = $_GET['id'];
if(isset($_POST['submit'])){
	$name = $_POST['name'];
$price = $_POST['price'];
$facilities = $_POST['facilities'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
if($_FILES['pic']['error']){
	$pic = $_POST['oldpic'];
}
else
{
	$pic = rand(0,999999).$_FILES['pic']['name'];
	move_uploaded_file($_FILES['pic']['tmp_name'],'upload/'.$pic);
}
$query = "update `room` set `name`='$name',`price`='$price',`facilities`='$facilities',`description`='$description',`quantity`='$quantity',`pic`='$pic' where `rid`='$id'";
$result = mysqli_query($conn,$query);
if($result){
	echo "<script>window.location.assign('view.php?ok=0');</script>";
}
else{
	echo "<div class='alert alert-danger'>Try Again</div>";
}
} 
$q="select * from `room` where `rid`='$id'";
$res=mysqli_query($conn,$q);
$row=mysqli_fetch_array($res);

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
								<label>Name</label>
								<input class="form-control" type="text" name="name" value="<?php echo $row['name'];?>" placeholder="Enter your name" required="required">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>Price</label>
								<input class="form-control" type="text" name="price" placeholder="Enter your price" required="required" value="<?php echo $row['price'];?>">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>Facilities</label>
								<input class="form-control" type="text" name="facilities" placeholder="Write a facilities" required="required" value="<?php echo $row['facilities'];?>">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>Description</label>
								<textarea class="form-control" type="text" name="description" placeholder="Write a description" required="required"><?php echo $row['description'];?></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>Quantity</label>
								<input class="form-control" type="text" name="quantity" placeholder="quantity" required="required" value="<?php echo $row['quantity'];?>">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 form-group">
								<label>Picture</label>
								<input class="form-control" type="hidden" name="oldpic" value="<?php echo $row['pic'];?>">
								<input class="form-control" type="file" name="pic" />
								<img src="upload/<?php echo $row['pic'];?>" width="150px" height="150px"/>
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
