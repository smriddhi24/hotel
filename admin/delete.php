<?php
	session_start();
	if(!isset($_SESSION['adminemail'])){
		echo "<script>window.location.assign('login.php');</script>";
	}
	include "config.php";
	$id = $_GET['id'];
	$q = "delete from `room` where `rid`='$id'";
	$res = mysqli_query($conn,$q);
	if($res)
	{
		echo "<script>window.location.assign('view.php?msg=0');</script>";
	}
	else
	{
		echo "<script>window.location.assign('view.php?try=0');</script>";
	}
?>