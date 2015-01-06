<?php
	include_once "log.php";
	session_start();
?>

<html>
	<head>
		<title>Front Page</title>
	</head>
	<body>
		<?php
			$now = strftime("%c");
			
			if (!session_is_registered('l')) {
				$logger = new Log("/tmp/persistent_log");
				session_register('l');
				$logger->write("Created $now");
				
				echo("<p>Created session and persistent log object.</p>");
			}
			
			$logger->write("Viewed first page {$now}");
			
			echo "<p>The log contains:</p>";
			echo nl2br($logger->read());
		?>

		<a href="next.php">Move to the next page</a>
	</body>
</html>
