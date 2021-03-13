<html>
<head>
<style>
table, td, th
{
	border: 1px solid gray; /* solid dotted */
	border-collapse: collapse;
	text-align: center;
}
th
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

include ("db_connect.php");

$usersList = $conn1->query("SELECT * FROM `users`");

echo '
	<form>
		<input list="sqldata">
			<datalist id="sqldata">
		';
foreach($usersList AS $eachRow)
{
	echo '<option value="'.$eachRow['full_name'].'">';
}
	echo '</datalist>
	</form>
';

?>

</table>

</body>
</html>