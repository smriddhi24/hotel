<?php
	session_start();
	include"config.php";
	include "header.php";
	$id=$_GET['id'];
	$query ="select * from `room` where `rid`='$id'";
	 $result = mysqli_query($conn,$query);
	 $row=mysqli_fetch_array($result);
?>
	<!-- page details -->
	<div class="breadcrumb-mobamu">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Room Detail</li>
		</ol>
	</div>
	<!-- //page details -->
	<!-- single -->
	<div class="blog-w3l py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">Room Details</h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3"></p>
			<div class="blog_section px-lg-5">
				<div class="card border-0">
					<a href="#">
						<img src="admin/upload/<?php echo $row['pic'];?>" alt="" class="img-fluid" style="height:482px; width:1014px;">
					</a>
					<div class="card-body p-0 py-4">
						<!--<div class="row border-bottom pb-3">
							<div class="col-sm-6 col-4 perso-wthree">
								<h6 class="blog-first text-bl">
									<span class="fa fa-user mr-2"></span>Adrian Lie
								</h6>
							</div>
							<div class="col-sm-6 col-8 info-commt text-right">
								<ul class="blog_list">
									<li>Jan 16, 2019</li>
									<li class="mx-3">
										<a href="#">
											<span class="fa fa-heart-o mr-1"></span>30
										</a>
									</li>
									<li>
										<a href="#">
											<span class="fa fa-comments-o mr-1"></span>18
										</a>
									</li>
								</ul>
							</div>
						</div>-->
						<a href="#" class="text-bl font-weight-bold blog-grid-title mt-4 mb-3"><h1><?php echo $row['name'];?></h1></a>
						<p class="card-text"><?php echo $row['description'];?></p>
					</div>
				</div>
				<a href="#" class="single-text text-bl font-weight-light my-3">Facilities</a>
				<p><?php echo $row['facilities'];?></p>
				
				<a href="#" class="text-bl font-weight-bold blog-grid-title mt-4 mb-3">Price</a>
				<div class="row">
					<div class="col-md-6">
						<p><i class="fa fa-inr"></i><?php echo $row['price'];?></p>
					</div>
					
				</div>
				
			
				
			</div>
		</div>
	</div>
	<!-- //single -->
	<?php
	include "footer.php";
?>