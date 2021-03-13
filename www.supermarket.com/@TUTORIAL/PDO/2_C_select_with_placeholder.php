<?php 

include ("1_db_connect.php");

$query = $conn1->prepare("
	SELECT * FROM `users` WHERE `email_id`=:EMID AND `password`=:PWD
");

$valToBind = array(
	':PWD' => 'e99a18c428cb38d5f260853678922e03',
	':EMID' => 'anjum@nirjhor.net'
);

$query->execute($valToBind);

$usersList = $query->fetchAll(PDO::FETCH_ASSOC);

$totalRows = $query->rowCount();

echo "<br /><br />Total Selected Row is: " . $totalRows . "<br /><br />";

foreach($usersList AS $eachRow)
{
	echo $eachRow['full_name'] . " | " . $eachRow['phone_no'] . "<br />";
}

?>