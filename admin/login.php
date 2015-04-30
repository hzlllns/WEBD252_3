<?php $pagetitle = "Book Shelf - Log In" ; ?>
<?php include "../header.php"; ?>
		<h2>Login</h2>
		<form action="login-action.php" method="post">
			<label>Username</label>
			<input name="username" type="text">
			<label>Password</label>
			<input name="password" type="password">
			<button type="submit">Save</button>
		</form>
<?php include "../footer.php"; ?>