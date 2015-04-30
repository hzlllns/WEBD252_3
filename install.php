<?php

	// Include configuration
	include('config.php');

	// Open connection to database (using PDO)
	$db_connection = new PDO("mysql:dbname=$db_name;host=$db_server", $db_username, $db_password);

	// Create "Content" table
	$db_connection->query(
		"CREATE TABLE Content(
			ID INT AUTO_INCREMENT,
			Title VARCHAR(255),
			DateRead DATE,
			Author VARCHAR(255),
			Link VARCHAR(255),
			CoverImage VARCHAR(255),
			Description TEXT,			
			PRIMARY KEY(ID)
		)"
	);
?>
<h1>Installation Complete</h1>





