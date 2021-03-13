<?php

/*
	1. PDO Database Connection / Passing Attributes (Host, Database Name, Char-set, DB Username, DB Password)
	2. Error Mode - Enabling
	3. Disabling Prepare Emulation / Safety for MySQL
*/
	$conn1 = new PDO('mysql:host=localhost;dbname=sysdb;charset=utf8', 'root', '');

/*
1 = Unsafe = ERRMODE_WARNING
2 = Safe = ERRMODE_EXCEPTION
*/
	$errorMode = "1";

	if($errorMode == "1")
		$conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	elseif($errorMode == "2")
		$conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$conn1->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	function getData($conn1)
	{
	   $query = $conn1->query("SELECT * FROM nirjhor");
	   
	   return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	// TRY CATCH //
	try 
	{
	   $answer = getData($conn1);
	   echo "<pre>"; print_r($answer); echo "</pre>";
	}
	catch(PDOException $ex)
	{
		echo "Error";
		
		# SAVING ERROR STATUS #
		$insertResult = $conn1->exec("
			INSERT INTO `error_message` (`error_details`) VALUES
			('".$ex."')
		");
		# SAVING ERROR STATUS #
	}

?>