
<?php

if (!empty($_POST['username'])) {
	$clean = array();

				$length = mb_strlen($_POST['username']);

				if (ctype_alnum($_POST['username']) && ($length > 0) && ($length <= 32)) {
					$clean['username'] = $_POST['username'];
					echo "Welcome, " . $_POST['username'] . "!";
				}
				else {
					echo "error!";
				}
}
else {
echo "Enter username.";
	
}
?>

<html>
		<head><title>Username Validation Trial</title></head>
		<body>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
				<input name="username" type="text" placeholder="Username" />
				<input name="submit" type="submit" value="Enter" />
			</form>
		</body>
	</html>