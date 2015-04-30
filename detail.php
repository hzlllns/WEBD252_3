<?php

	// Include configuration
	include('config.php');

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

?><?php include "header.php"; ?>
				
				<a href="admin/add.php" id="add">+</a>
				<ul id="bookshelf">
					<li>
						<h2>
							<a href="<?php echo $row['Link']; ?>">
								<?php echo $row['Title']; ?>
							</a>
						</h2>
						<span class="author"><?php echo $row['Author']; ?></span>
						<a href="<?php echo $row['Link']; ?>">
							<img class="cover" src="uploads/<?php echo $row['CoverImage']; ?>" />
						</a>
						<p><?php echo $row['Description']; ?></p>
						<?php echo $row['DateRead']; ?>
					</li>

				</ul>
<?php include "footer.php"; ?>