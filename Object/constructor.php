<?php

class Person
{
	public $name, $address, $age;

	function __construct($name, $address, $age)
	{
		$this->name = $name;
		$this->address = $address;
		$this->age=$age;
	}
}

class Employee extends Person
{
	public $position, $salary;

	function __construct($name, $address, $age, $position, $salary)
	{
		parent::__construct($name, $address, $age);

		$this->position=$position;
		$this->salary=$salary;
	}
}

$emp = new Employee("Dan", "Taguig", "19", "something", "1111");

printf("Name: %s\nAddress: %s\nAge: %d\nPosition: %s\nSalary: P%.2f\n", $emp->name, $emp->address, $emp->age, $emp->position, $emp->salary);
?>