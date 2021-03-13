<?php 
function selectData($tableName, $whereValue)
{
	$conn1 = new PDO('mysql:host=localhost;dbname=sysdb;charset=utf8', 'root', '');
	$conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn1->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	
	$sql = $sql1 = "";
	$sql .= "SELECT * ";
	$sql .= "FROM `$tableName` WHERE ";
	
	foreach($whereValue AS $key1=>$val1)
	{
		$upperKey1 = strtoupper($key1);
		$sql1 .= "`$key1`=:$upperKey1 AND "; # Prepared Statement
		
		$valToBind[":$upperKey1"] = "$val1"; # Bind Value
	}
	$sql1 = substr($sql1, 0, -4);
	$sql = $sql . $sql1;
	
	$query = $conn1->prepare($sql);
	$query->execute($valToBind);
	
	$usersList = $query->fetchAll(PDO::FETCH_ASSOC);
	
	$totalRows = $query->rowCount();
	echo "<br /><br />Total Selected Row is: " . $totalRows . "<br /><br />";
	
	foreach($usersList AS $eachRow)
		echo $eachRow['full_name'] . " | " . $eachRow['phone_no'] . "<br />";
}

$tableName = "users";
$whereValue = array(
	'email_id' => 'anjum@nirjhor.net', 
	'password' => 'e99a18c428cb38d5f260853678922e03',
	'phone_no' => '01933033635'
);
	
selectData($tableName, $whereValue);

?>