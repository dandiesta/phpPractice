<?php

$a = 3;

function foo()
{
	$a+=2;
}

//The value of a is still 3 even though inside the foo function it is different
foo();
echo "The value of a is $a";

?>
