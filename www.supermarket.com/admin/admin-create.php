<?php
include("app/Http/Controllers/View.php");
 
$view = new View;
 
	$view->includeView("top");
	$view->loadContent("admin-create");
	$view->includeView("tail");
?>