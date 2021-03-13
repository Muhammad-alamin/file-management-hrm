<?php 
########## PATH VARIABLES
$sitePath = $_SERVER['REQUEST_URI'];
$GLOBALS['PAGE_NAME'] = basename($sitePath); # index.php | catalog.php?p=1&q=1

########## WEBSITE CONFIGURATIONS
$GLOBALS['CURRENCY'] = "৳" ;
$GLOBALS['CURRENCY_NAME'] = "BDT";

########## SESSION OUT 
if(@$_GET['logout'] == "yes")
{
	@session_destroy();
	echo '<meta http-equiv="Refresh" content="0; url=index.php" />';
}

?>