<?php

	session_start(); 

	$username=($_POST['username']);
	$password=($_POST['password']);

	if($username == "admin" && $password == "admin"){
		$_SESSION['valid'] = true;
        $_SESSION['username'] = 'admin';
		header("location:success.php");
	} else {
	  echo 'Wrong Username or Password! Return to <a href="index.php">Login</a>';
	}
?>