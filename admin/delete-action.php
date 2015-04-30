<?php

	// Check if user not logged in
	session_start();
	if (!isset($_SESSION['login'])) {
		header('location:login.php');
		exit();
	}

	// Include configuration
	include('../config.php');

	// Open connection to database (using PDO)
	$db_connection = new PDO("mysql:dbname=$db_name;host=$db_server", $db_username, $db_password);

	// Insert book into database
	$query = $db_connection->prepare(
		'DELETE FROM Content WHERE ID=?'
	);
	$query->bindParam(1, $_GET['id']);
	$query->execute();

?>
<?php include "../header.php"; ?>
		<h1>Item deleted</h1>
		<a href="index.php">Back to menu</a>
<?php include "../footer.php"; ?>