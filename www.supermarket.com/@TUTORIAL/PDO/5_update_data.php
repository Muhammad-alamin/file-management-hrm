<?php 

include ("1_db_connect.php");

$affectedRows = $conn1->exec("UPDATE `users` SET `full_name`='Bill Gates Anjum' WHERE `id` = '5'");

print_r($affectedRows);

echo "Total Number of Affected Rows are: " . $affectedRows;

?>