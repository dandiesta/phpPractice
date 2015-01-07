<html>
	<head>
		<title>Preferences Set</title>
	</head>
	<body>
		<?php
			session_start();

			$colors = array(
				'black' => "#000000",
				'white' => "#ffffff",
				'red'   => "#ff0000",
				'blue'  => "#0000ff"
			);

			$backgroundName = $_POST['background'];
			$foregroundName = $_POST['foreground'];

			$_SESSION['bg'] = $backgroundName;
			$_SESSION['fg'] = $foregroundName;

		?>

		<p>Thank you. Your preference have been changed to:<br />
			Background: <?= $backgroundName; ?><br/>
			Foreground: <?= $foregroundName; ?></p>

		<p>Click <a href="prefs_session_demo.php">here</a> to see the preferences in action.</p>
	</body>
</html>