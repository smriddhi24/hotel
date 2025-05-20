<?php
session_start();
	unset($_SESSION['adminid']);
	unset($_SESSION['adminname']);
	unset($_SESSION['adminemail']);
	unset($_SESSION['adminpassword']);
	if(isset($_SESSION['adminname']))//Any one you are chose for uper
	{
		echo "<script>window.location.assign('index.php');</script>";
		
		
	}
	else
	{
		echo "<script>window.location.assign('login.php');</script>";
		
	}
?>