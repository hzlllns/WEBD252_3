<?php

	// Check username and password
	if ($_POST['username'] == 'admin' && $_POST['password'] == 'humber') {

		// Set "logged in" flag
		session_start();
		$_SESSION['login'] = TRUE;

		// Redirect to menu
		header('location:index.php');
		exit();
	}

	// Send back to login
	header('location:login.php');
	exit();

?>