<?php

if (isset($_GET['message'])) {

// load font and image, calculate width of text
$font = "times";
$size = 12;
$image = imagecreatefrompng("button.png");
$tsize = imagettfbbox($size, 0, $font, $_GET['message']);

// center
$dx = abs($tsize[2] -
$dy = abs($tsize[5] -
$x = (imagesx($image)
$y = (imagesy($image)
$tsize[0]);
$tsize[3]);
- $dx) / 2;
- $dy) / 2 + $dy;

// draw text
$black = imagecolorallocate($im,0,0,0);
imagettftext($image, $size, 0, $x, $y, $black, $font, $_GET['message']);

// return image
header("Content-type: image/png");
imagepng($image);
exit;

} 
?>

<html>
	<head>
		<title>Button Form</title>
	</head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
			Enter message to appear on button:
			<input type="text" name="message" /><br />
			<input type="submit" value="Create Button" />
		</form>
	</body>
</html>

