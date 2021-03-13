<?php 
# BLOCK UNAUTHORIZED USER
$path = $_SERVER['REQUEST_URI'];
$filename = basename($path); # index.php

if($filename != "index.php")
{
	# CONDITION TO CHECK LOGOUT 
	if(empty($_SESSION['SMC_admin_login_time']))
		echo '<meta http-equiv="Refresh" content="0; url=index.php" />';
}
# SESSION OUT 

if(@$_GET['logout'] == "yes")
{
	@session_destroy();
	echo '<meta http-equiv="Refresh" content="0; url=index.php" />';
}

# WEBSITE CONFIGURATIONS

$GLOBALS['CURRENCY'] = "$" ;

?>