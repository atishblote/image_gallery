<?php 

	session_start();
	$sessId = session_id();

	if ($sessId !=  $_SESSION['sess_id']) {
		session_destroy();
		header('location:login.php');
	}
 ?>