<?php

function counter()
{
	static $count = 0;
	return $count++;
}

for ($i = 1;$i <= 5; $i++)
{
	//displays 01234
	print counter();
}
?>
