<?php
	session_start();
	if(!isset($_SESSION['adminid']))
	{
		echo "<script>window.location.assign('login.php');</script>";
	}

include "header.php";
?>
<!-- //page details -->
<!-- booking form -->
	<div class="register-w3 py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">Message</h3>
			<table class="table">
			  <thead class="thead-dark">
				<tr>
					<th scope="col">cid</th>
				  <th scope="col">name</th>
				  <th scope="col">email</th>
				  <th scope="col">phone_number</th>
				  <th scope="col">message</th>
				  <!--<th scope="col">password</th>-->
				</tr>
			  </thead>
			  <tbody>
					<?php
					 include "config.php";
					 $q = "select * from `contact`";
					 $res=mysqli_query($conn,$q);
					 
					 if(mysqli_num_rows($res)>0)
					 {
						 while($row=mysqli_fetch_array($res))
						 {
				?>
				
				<tr>
				  <th ><?php echo $row['cid'];?></th>
				  <td><?php echo $row['name'];?></td>
				  <td><?php echo $row['email'];?></td>
				  <td><?php echo $row['phone_number'];?></td>
				  <td><?php echo $row['message'];?></td>
				  <!--<td><?php echo $row['password'];?></td>-->
				 <!-- <td><a href="update.php?id=<?php echo $row['rid']?>">Update</a></td>
				  <td><a href="delete.php?id=<?php echo $row['rid'];?>">Delete</a></td>-->
				</tr>
			<?php
						 }
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