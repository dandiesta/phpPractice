<?php

interface Printable
{
	function printOutput();
}

class ImageComponent implements Printable
{
	function printOutput()
	{
		echo "Printing an image...";
	}
}
?>