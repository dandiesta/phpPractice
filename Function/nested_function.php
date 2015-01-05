<?php
function outer ($a)
{
	function inner ($b)
	{
		echo "there $b\n";
	}
	
	echo "$a, hello ";
}

//outputs "well, hello there reader"
outer("well");
inner("reader");

?>
