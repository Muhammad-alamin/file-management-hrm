<html>
<head>
<style>
table, td, th
{
	border: 1px solid gray; /* solid dotted */
	border-collapse: collapse;
	text-align: center;
}
tr
{
	background-color: gray;
	color: white;
	width: 25%;
	line-height: 200%;
}
table
{
	width: 100%;
}
</style>
</head>

<body>

<table>
<?php 

include("1_db_connect.php");

if(isset($_GET['del']))
	echo "I am going to delete you Mr " . $_GET['del'] . "<br><br>";

# OLD PATTERN // CONNECTION WITH PDO, BUT FUNCTION IS OLD
$usersList = $conn1->query("SELECT * FROM `users`");

foreach($usersList AS $eachRow)
{
	echo '
	<tr>
		<td>'.$eachRow['id'].'</td>
		<td>'.$eachRow['full_name'].'</td>
		<td>'.$eachRow['phone_no'].'</td>
		<td>'.$eachRow['email_id'].'</td>
		<td><a href="?del='.$eachRow['id'].'">DELETE</a></td>
	</tr>
	';
}

?>
	
</table>

</body>
</html>