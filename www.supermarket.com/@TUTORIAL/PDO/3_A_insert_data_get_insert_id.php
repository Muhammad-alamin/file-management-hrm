<?php 

include ("1_db_connect.php");

$insertResult = $conn1->exec("
INSERT INTO `users` (`user_type`, `full_name`, `age`, `phone_no`, `full_address`, `job`, `salary`, `email_id`, `password`) VALUES
(1, 'Nirjhor Anjum', 18, '8801613211000', '93 B Eskaton Road, Dhaka, Bangladesh.', 'Engineer', 140000, 'nirjhor.anjum@gmail.com', 'MMK@786');
");

$lastId = $conn1->lastInsertId();

echo "Last Insert ID: " . $lastId;

?>