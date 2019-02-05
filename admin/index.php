<?php
	require_once('scripts/config.php');
	confirm_logged_in();
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome <?php echo $_SESSION['user_name'] ?></title>
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>

	<div>
		<h1>Admin Dashboard</h1>
		<h2>Welcome <?php echo $_SESSION['user_name'] ?></h2>

		<nav>
			<ul>
				<li><a href="#">Create User</a></li>
				<li><a href="#">Edit User</a></li>
				<li><a href="#">Delete User</a></li>
				<li><a href="scripts/caller.php?caller_id=logout">Sign Out</a></li>
			</ul>
		</nav>
		<div>
		<p>Last login: <?php echo $_SESSION['user_date'] ?></p> <!-- shows the date on the screen -->
		</div id="last_login">
	</div>

</body>
</html>