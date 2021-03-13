<?php 

include ("1_db_connect.php");

# ?del=6 | $_GET['del'] | I will get this from User in $_GET or $_POST method

# PREPARE THE SQL QUERY
$delQuery = $conn1->prepare("DELETE FROM users WHERE id=:GOT_ID");

# BINDING THE VALUE bindValue(KEY, VALUE, VALUE_TYPE)
$delQuery->bindValue(':GOT_ID', 20, PDO::PARAM_INT);

# EXECUTION OF THE QUERY
$delQuery->execute(); 

# COUNT NUMBER OF DATA DELETED
$deletedRow = $delQuery->rowCount();

echo "Deleted Number of Row: " . $deletedRow;

# CHECK DELETION
if($deletedRow > 0)
	echo "<br /><br />Successfully Deleted";
else
	echo "<br /><br />Nothing is Deleted";

?>