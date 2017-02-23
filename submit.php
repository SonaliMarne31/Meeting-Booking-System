<?php
	
	$student_name = ($_POST['student_name']);
	$student_id = ($_POST['student_id']);
	$booked_date = ($_POST['date']);
	
	$_SESSION['valid'] = false;
	session_destroy();
	header("location:booked.php");
	
?>