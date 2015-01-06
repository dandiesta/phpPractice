<?php

trait Command
{
	function run()
	{
		echo "Executing a command\n";
	}
}

trait Marathon
{
	function run()
	{
		echo "Running a marathon\n"
	}
}

class Person
{
	use Command, Marathon
	{
		Marathon::run insteadof Command;
	}
}

$person = new Person;
$person->run();

?>