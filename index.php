<?php

$pagetitle = "Book Shelf" ;

// Include configuration
include('config.php');

// Open connection to database (using PDO)
$db_connection = new PDO("mysql:dbname=$db_name;host=$db_server", $db_username, $db_password);

// Get all cats and dogs from database
$result = $db_connection->query(
	'SELECT * FROM Content ORDER BY ID DESC'
	);

	?>

<?php include "header.php"; ?>

			<a href="admin/login.php" id="add">+</a>

			<ul id="bookshelf"><?php while ($row = $result->fetch()): ?>
				<li>
					<h2>
						<a href="detail.php?id=<?php echo $row['ID']; ?>">
							<?php echo $row['Title']; ?>
						</a>
					</h2>
					<span class="author"><?php echo $row['Author']; ?></span>
					<a href="<?php echo $row['Link']; ?>" class="cover">
						<img src="uploads/<?php echo $row['CoverImage']; ?>" />
					</a>
					<span class="date"><?php echo $row['DateRead']; ?></span>
				</li>
			<?php endwhile; ?></ul>

<?php include "footer.php"; ?>
