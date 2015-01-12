<?php

if (PHP_OS == 'WIN32' || PHP_OS == 'WINNT') {
	define('EOL', '\r\n');
}
else if (PHP_OS == 'Linux') {
	define('EOL', '\n');
}
else { // some other platform
	define('EOL', '\n');
}

function ln($out) {
	echo $out . EOL;
}

ln("This line will have the server platform's EOL character ");

?>