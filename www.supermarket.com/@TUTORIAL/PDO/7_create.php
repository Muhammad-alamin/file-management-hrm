<?php

include ("1_db_connect.php");

try 
{
    $query = "
		CREATE TABLE feedback (
			id INT(6) AUTO_INCREMENT PRIMARY KEY, 
			fullname VARCHAR(30) NULL DEFAULT NULL,
			email_id VARCHAR(30) NULL DEFAULT NULL,
			mobile_no VARCHAR(50) NULL DEFAULT NULL,
			feedback_time TIMESTAMP
		)
	";

    $conn1->exec($query);
	echo "Table MyGuests Created Successfully";
}
catch(PDOException $e)
{
	echo $query . "<br />" . $e->getMessage();
}

$conn1 = null;
?>