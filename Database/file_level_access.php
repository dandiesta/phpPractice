<?php

session_start();
if (!empty($_POST['posted']) && !empty($_POST['email'])) {
	$folder = strtolower($_POST['email']);

	// send path information to the session
	$_SESSION['folder'] = $folder;

	if (!file_exists($folder)) {
		//make the directory anf then add the empty files
		mkdir("/home/danica/surveys/" . $folder, 0777, true);
	}

	header("Location: 08_6.php");

}

else { ?>

	<html>
		<head>
			<title>Files & folders - On-line Survey</title>
		</head>

		<body bgcolor="White" text="black">
			<h2>Survey form</h2>

			<p>Please enter your e-mail address to start recording your comments</p>

			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
				<input type="hidden" name="posted" value="1">
				<p>Email address: <input type="text" name="email" size="45" /><br />
					<input type="submit" name="submit" value="Submit"></p>
			</form>
		</body>
	</html>
<?php }
?>