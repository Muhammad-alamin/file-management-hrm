<?php 
include ("1_db_connect.php");

$query = $conn1->prepare("
	UPDATE `users` SET `full_name`='Bill Gates Anjuma' WHERE `id` = ':ID'
");

$valToBind = array(
		':ID' => '5'
);

$query->execute($valToBind);

# rowCount() Function returns the total number of Row inserted through the Query
$rowNumber = $query->rowCount();

# lastInsertId() Function returns ID of the last inserted Row
$lastInsertId = $conn1->lastInsertId();

echo "Total Number of Affected Rows are: " . $rowNumber;

?>