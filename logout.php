<?php
session_start();
	unset($_SESSION['userid']);
	unset($_SESSION['username']);
	unset($_SESSION['useremail']);
	unset($_SESSION['userpassword']);
	if(isset($_SESSION['username']))//Any one you are chose for uper
	{
		echo "<script>window.location.assign('index.php');</script>";
		
		
	}
	else
	{
		echo "<script>window.location.assign('login.php');</script>";
		
	}
?>