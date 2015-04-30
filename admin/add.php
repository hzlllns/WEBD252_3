<?php
	$pagetitle = "Book Shelf - Add New Book";
	// Check if user not logged in
	session_start();
	if (!isset($_SESSION['login'])) {
		header('location:login.php');
		exit();
	}

?><?php include "../header.php"; ?>
		<form enctype="multipart/form-data" action="add-action.php" method="post">
			<label>Book Title</label>
			<input name="Title" type="text">
			
			<label>Date Read</label>
			<input name="DateRead" type="date">
			
			<label>Author</label>
			<input name="Author" type="text">

			<label>Link to Book</label>
			<input name="Link" type="text">

			<label>Cover Image</label>
			<input name="CoverImage" type="file">
			
			<label>Description</label>
			<textarea name="Description"></textarea>

			<button type="submit">Submit</button>
		</form>
<?php include "../footer.php"; ?>