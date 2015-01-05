<?php

$array = array("really long string here, boy", "middling length", "larger");
$sortOption = 'random';

usort($array, function($a, $b) use ($sortOption)
{
	if ($sortOption == 'random')
	{
		//start randomly by returning (-1, 0, 1) at random
		return rand(0,2) -1;
	}	
	else
	{
		return strlen($a) - strlen($b);
	}
});

print_r($array);

?>
