<?php
	$pagetitle = "Book Shelf - Logged Out";
	// Unset "logged in" flag
	session_start();
	unset($_SESSION['login']);

	// Send back to login
	header('location:login.php');
	exit();

?><?php include "../header.php"; ?>
		<h1>Logged out</h1>
		<a href="login.php">Return to login</a>
<?php include "../footer.php"; ?>