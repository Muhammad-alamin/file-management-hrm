<?php
/* 
PDO = PHP Data Object
PDO can handle 12 types of Database
PDO can easily safe your application from SQL Injection Attack

If Bound by IP = Use "IP" as "host"
If Bound by localhost = Use "localhost" as "host"
*/

# Get Connected to the Server
# ('mysql:host=HOST_NAME;dbname=DATABASE_NAME;charset=CHARSET_NAME', 'DB_USERNAME', 'DB_PASSWORD')
$conn1 = new PDO('mysql:host=localhost;dbname=sysdb;charset=utf8', 'root', '123456');

# Setting Error Showing Mode as "EXCEPTION"
$conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

# false = No need to prepare Database Engine for handling Prepared Statements
$conn1->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

/*
if($conn1)
	echo "Connected to Database<br /><br />";
else
	echo "Not connected to Database<br /><br />";
*/
?>