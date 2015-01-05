<?php

$names = array("Fred", "Barney", "Wilma", "Betty");

function &findOne($n)
{
	global $names;
	return $names[$n];
}

$person =& findOne(1); //Barney
$person = "Barnetta";  //Changes $names[1]

echo $names[1];
?>
