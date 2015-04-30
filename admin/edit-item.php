<?php
	$pagetitle = "Book Shelf - Edit";
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

	// Get cat or dog from database
	$query = $db_connection->prepare(
		"SELECT * FROM Content WHERE ID=?"
	);
	$query->bindParam(1, $_GET['id']);
	$query->execute();

	// Get the first (and only) row from results
	$row = $query->fetch();

?>
<?php include "../header.php"; ?>
		<form enctype="multipart/form-data" action="edit-action.php" method="post">
			<input name="ID" type="hidden" value="<?php echo $row['ID']; ?>">

			<label>Book Title</label>
			<input name="Title" type="text" value="<?php echo $row['Title']; ?>">

			<label>Date Read</label>
			<input name="DateRead" type="date">

			<label>Author</label>
			<input name="Author" type="text">

			<label>Link to Book</label>
			<input name="Link" type="text">

			<label>Cover Image</label>
			<input name="CoverImage" type="file">
			
			<label>Description</label>
			<textarea name="Description"><?php echo $row['Description']; ?></textarea>

			<button type="submit">Save</button>
		</form>
<?php include "../footer.php"; ?>