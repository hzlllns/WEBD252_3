<?php

	// Check if user not logged in
	session_start();
	if (!isset($_SESSION['login'])) {
		header('location:login.php');
		exit();
	}

	// Include configuration
	include('../config.php');

	// Check if cover image submitted
	if (!empty($_FILES['CoverImage']['name'])) {

		// Move uploaded image from temp folder into uploads folder
		move_uploaded_file(
			$_FILES['CoverImage']['tmp_name'], 				// From temp location
			'../uploads/' . $_FILES['CoverImage']['name']	// to uploads folder
		);
	}

	// Open connection to database (using PDO)
	$db_connection = new PDO("mysql:dbname=$db_name;host=$db_server", $db_username, $db_password);

	// Insert book into database
	$query = $db_connection->prepare(
		'INSERT INTO Content(Title, DateRead, Author, Link, CoverImage, Description) VALUES(?, ?, ?, ?, ?, ?)'
	);
	$query->bindParam(1, $_POST['Title']);
	$query->bindParam(2, $_POST['DateRead']);	
	$query->bindParam(3, $_POST['Author']);
	$query->bindParam(4, $_POST['Link']);
	$query->bindParam(5, $_FILES['CoverImage']['name']);
	$query->bindParam(6, $_POST['Description']);
	$query->execute();

?>
<?php include "../header.php"; ?>
		<h1>Item added</h1>
		<a href="index.php">Back to menu</a>
<?php include "../footer.php"; ?>