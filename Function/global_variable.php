<?php

$a = 3;

function foo()
{
	global $a;
	
	$a += 2;
}

foo();
echo $a; //displays the result of foo function instead of the global value of $a 

?>
