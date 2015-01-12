<?php

if (PHP_OS == 'WIN32' || PHP_OS == 'WINNT') {
	echo "You are on a Windows System";
}
else if (PHP_OS == 'Linux') {
	echo "You are on a Linux System";
}
else { // some other platform
	echo "You are NOT on a Windows System";
}


?>