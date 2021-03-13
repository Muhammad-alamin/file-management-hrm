<?php

include("config/site.php");
include("config/server.php");
include("config/database.php");

class Controller
{
	public $connection;
	
	public function __construct()
	{
		$this->connection = new PDO('mysql:host='.$GLOBALS['DBHOST'].';dbname='.$GLOBALS['DBNAME'].';charset=utf8', $GLOBALS['DBUSER'], $GLOBALS['DBPASS']);
		$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	}
	
	// VERIFY FILE FORMAT // IMAGE TYPES //
	public function checkImage($fileType, $fileSize, $fileError)
	{
		$allowedExts = array("gif", "jpeg", "jpg", "png"); // in a Array > all Supported Image Formats are Stored //
		
		// 5 MB = 5242880 Bytes //
		if ((($fileType == "image/gif")
		|| ($fileType == "image/jpeg")
		|| ($fileType == "image/jpg")
		|| ($fileType == "image/pjpeg")
		|| ($fileType == "image/x-png")
		|| ($fileType == "image/png"))
		&& ($fileSize < 5242880)
		&& ($fileError <= 0))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>