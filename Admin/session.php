<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_ADMIN_ID'])&& !isset($_SESSION['SESS_ADMIN_USERNAME']) || (trim($_SESSION['SESS_ADMIN_ID']) == '')) {
		header("location: login.php");
		exit();
	}
?>