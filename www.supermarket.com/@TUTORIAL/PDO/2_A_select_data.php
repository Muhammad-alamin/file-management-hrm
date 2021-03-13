<?php 

include ("1_db_connect.php");

$query = $conn1->prepare("SELECT * FROM `users`");
$query->execute();
$result = $query->fetchAll();

echo "<pre>";

print_r($result);

echo "<select>";

foreach($result AS $eachPerson)
{
	echo "<option>".$eachPerson['full_name']."</option>";
}

echo "</select>";

?>