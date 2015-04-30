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

	// Get all cats and dogs from database
	$result = $db_connection->query(
		'SELECT * FROM Content'
	);
?>
<?php include "../header.php"; ?>
		<h1>Choose an item to delete</h1>
		<ul>
			<?php while ($row = $result->fetch()): ?>
				<li>
					<a href="delete-action.php?id=<?php echo $row['ID']; ?>">
						<?php echo $row['Title']; ?>
					</a>
				</li>
			<?php endwhile; ?>
		</ul>
<?php include "../footer.php"; ?>



