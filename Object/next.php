<?php
	include_once "Log.php";
	session_start();
?>

<html>
	<head>
		<title>Next Page</title>
	</head>
	<body>
		<?php
			$now = strftime("%c");
			$logger->write("Viewed page 2 at {$now}");

			echo "<p>The log contains:";
			echo nl2br($logger->read());
			echo "</p>";
		?>
	</body>
</html>
