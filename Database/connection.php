<?php
$username = "root";
$password = "klab";
try {
	$db = new PDO("mysql:host=localhost;dbname=Account", $username, $password);
}
catch (Exception $error) {
	die("Connection failed: " . $error->getMessage() . "\n");
}

try {
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->beginTransaction();

	$db->exec("insert into Record (account_id, amount) values (23, 5000)");
	$db->exec("insert into Record (account_id, amount) values (27, -5000)");

	$db->commit();
}
catch (Exception $error) {
	$db->rollback();
	echo "Transaction not completed: ". $error->getMessage();
}
?>