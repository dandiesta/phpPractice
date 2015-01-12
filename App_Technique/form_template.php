<?php
require('form_function.php');
//require('user.template');
//include('user.template');
//file_get_contents("user.template");

$bindings['DESTINATION'] = $_SERVER['PHP_SELF'];

$name = $_GET['name'];

if (!empty($name)) {
	//do something with the supplied values
	$template = "thankyou.template";
	$bindings['NAME'] = $name;
}
else {
	$template = "user.template";
}

echo fillTemplate($template, $bindings);

?>