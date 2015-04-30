<?php
	$pagetitle = "Book Shelf - Log In";
	// Check if user not logged in
	session_start();
	if (!isset($_SESSION['login'])) { // check if value is not set - set that flag
		header('location:login.php');
		exit();
	}

?><?php include "../header.php"; ?>
		<h2>Welcome</h2>
		<ul>
			<li><a href="add.php">Add item</a></li>
			<li><a href="edit.php">Edit item</a></li>
			<li><a href="delete.php">Delete item</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>

<?php include "../footer.php"; ?>