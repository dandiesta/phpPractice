<?

$folder = "/home/danica/sample_folder/";

if (!empty($_POST['email'])) { //to check if there is an email input
	if (!file_exists($folder)){ // to check if the sample_folder already exists
		$makedir = mkdir($folder, 0777, true); //makes folder
			if ($makedir== 1) //check if creation is successful
			{
				echo "Folder sample_folder created.";
			}
			else
			{
				echo "Folder sample_folder was not created.";	
			}
	}
	else //if it's existing, do this:
	{
		if (!file_exists($folder . ($_POST['email']))) { //check if subfolder does not exists
			mkdir($folder . ($_POST['email']), 0777, true)//$makesubdir = mkdir($folder . ($_POST['email']), 0777, true); //makes subfolder
			
			if ($makesubdir==1) { //check if creation of subfolder is successful
				echo "Folder created $folder" . $_POST['email'];
			}
			else {
				echo "Folder not created $folder" . $_POST['email'];
			}

		}
		else {
			echo "Folder $folder" . $_POST['email'] . " already exists";
		}
	}
}
else {?>
	<html>
		<head>
			<title>Files & folders - On-line Survey</title>
		</head>

		<body bgcolor="White" text="black">
			<h2>Dan's form</h2>

			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
				<input type="hidden" name="posted" value="1">
				<p>folder name: <input type="text" name="email" size="45" /><br />
					<input type="submit" name="submit" value="Submit"></p>
			</form>
		</body>
	</html>
<?php }
?>