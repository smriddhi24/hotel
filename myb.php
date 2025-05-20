<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		echo "<script>window.location.assign('login.php');</script>";
	}
	include "config.php";
	include "header.php";
	
?>
<!-- page details -->
	<div class="breadcrumb-mobamu">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">My Booking </li>
		</ol>
	</div>
<!-- //page details -->
<!-- booking form -->
	<div class="register-w3 py-5">
		<div class="container py-xl-5 py-lg-3 table-responsive">
			<h3 class="tittle text-center text-bl font-weight-bold">My Booking </h3>
			<table class="table">
			  <thead class="thead-dark">
				<tr>
					<th scope="col">bid</th>
				 <!-- <th scope="col">user_id</th>-->
				  <th scope="col">rid</th>
				  <!--<th scope="col">Name</th>
				  <th scope="col">Email</th>
				  <th scope="col">Phone</th>-->
				  <th scope="col">in_date</th>
				  <th scope="col">out_date</th>
				  <th scope="col">adults</th>
				  <th scope="col">children</th>
				  <th scope="col">message</th>
				  <th scope="col">date</th>
				  <th scope="col">time</th>
				  <th scope="col">Status</th>
				  </tr>
			  </thead>
			  <tbody>
					
					<?php
					 
					 $q = "select * from `booking_request` inner join `room` on `booking_request`.`rid`=`room`.`rid` where `booking_request`.`user_id`='$_SESSION[userid]'";
					 $res=mysqli_query($conn,$q);
					 
					 if(mysqli_num_rows($res)>0)
					 {
						 while($row=mysqli_fetch_array($res))
						 {
				?>
				
				<tr>
				  <th scope="row"><?php echo $row['bid'];?></th>
				  <!--<th scope="row"><?php echo $row['user_id'];?></th>-->
				  <th scope="row"><?php echo $row['name'];?></th>
				  <!--<th scope="row"><?php echo $row['bname'];?></th>
				  <th scope="row"><?php echo $row['bemail'];?></th>
				  <th scope="row"><?php echo $row['bphone'];?></th>-->
				  <td><?php echo $row['in_date'];?></td>
				  <td><?php echo $row['out_date'];?></td>
				  <td><?php echo $row['adults'];?></td>
				  <td><?php echo $row['children'];?></td>
				   <td><?php echo $row['message'];?></td>
				  <th scope="row"><?php echo $row['date'];?></th>
				  <th scope="row"><?php echo $row['time'];?></th>
				  <th scope="row"><?php echo $row['status'];?></th>
				  </tr>
			<?php
						 }
					 }
					 else
					 {
						 echo "<tr><td colspan='14'>No Booking Found!</td></tr>";
					 }
					 
			?>
				
				
				
			     <!--<tr>
				  <th scope="row">2</th>
				  <td>Jacob</td>
				  <td>Thornton</td>
				  <td>@fat</td>
				</tr>
				<tr>
				  <th scope="row">3</th>
				  <td>Larry</td>
				  <td>the Bird</td>
				  <td>@twitter</td>
				</tr>-->
					 
				
			  </tbody>
			</table>
		</div>
	</div>
	<!-- //booking form -->
<?php
	include "footer.php";
?>