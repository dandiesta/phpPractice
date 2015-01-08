<?php
session_start();

$folder= $_SESSION['folder'];
$filename = $folder . "/question2.txt";

$file_handle = fopen($filename, "a+");
//open file for reading then clean it out
// pick up any text in the file that may already be there
$comments = fread($file_handle, filesize($filename));
fclose($file_handle); // close this handle

if ($_POST['posted']) {
	//create file if first time and then save
	//text that is in $_POST['question2']
	$question2 = $_POST['question2'];
	$file_handle = fopen($filename, "w+");
	//open file for total overwrite

	if (flock($file_handle, LOCK_EX)) { //do an exclusive lock
		if (fwrite($file_handle, $question2) == FALSE) {
			echo "Cannot write file to ($filename)";
		}
		flock($file_handle, LOCK_UN); //release the lock
	}
	//close the file_handle and redirect to the next page ?
	fclose($file_handle);
	header("Location: last_page.php");
}
else { ?>
	<html>
		<head>
			<title>Files & folders - On-line Survery</title>
		</head>
		<body>
			<table border=0>
				<tr>
					<td>Please enter your response to the following survey question:</td>
				</tr>
				<tr bgcolor="lightblue">
					<td>It's funny thing - freedom. I mean how can any of us <br>
						be really free when we still have personal possessions. <br>
						How do you respond to the previous statement?
					</td>
				</tr>
				<tr>
					<td>
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
							<input type="hidden" name="posted" value="1"> <br />
							<textarea name="question2" rows=12 cols=35><?=$comments ?></textarea>
							<tr>
								<td>
									<input type="submit" name="submit" value="Submit">
								</td>
							</tr>
						</form>
					</td>
				</tr>
			</table>
		</body>
	</html>
<?php }

?>