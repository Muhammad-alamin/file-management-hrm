<?php

$conn1 = new PDO('mysql:host=localhost;dbname=sysdb;charset=utf8', 'root', '123456');
$conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn1->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

/*

if($conn1)
	echo "Connected to Database<br /><br />";
else
	echo "Not connected to Database<br /><br />";

*/

?>